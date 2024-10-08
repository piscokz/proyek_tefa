<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactResponseMail;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        // Jika ingin menggunakan model Contact
        $contacts = Contact::all();

        // Jika ingin menggunakan query builder (DB facade)
        // $contacts = DB::table('contacts')->get();
        
        return view('admin.contact.index', compact('contacts'));
    }

    // Menampilkan form respon berdasarkan ID kontak
    public function showRespondForm($id)
    {
        // Jika menggunakan model Contact
        $contact = Contact::findOrFail($id);

        // Jika menggunakan query builder
        // $contact = DB::table('contacts')->where('id', $id)->first();
        
        return view('admin.contact.respond', compact('contact'));
    }

    // Mengirimkan respon dan menghapus kontak setelah email terkirim
    public function respond(Request $request, $id)
    {
        // Validasi input respon admin
        $request->validate([
            'admin_response' => 'required|string|max:1000',
        ]);

        $contact = Contact::findOrFail($id);

        // Mengambil respon admin dari form
        $response = $request->input('admin_response');

        // Kirim email ke tamu
        Mail::to($contact->email)->send(new ContactResponseMail($contact, $response));

        // Hapus kontak setelah mengirim email
        $contact->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Response sent successfully and contact deleted!');
    }

    // Menyimpan data kontak baru
    public function store(Request $request)
    {
        // Validasi permintaan yang masuk
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'title' => 'required|string|max:50',
        ]);

        // Simpan kontak menggunakan model Contact
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->message = $request->input('message');
        $contact->save();

        // Redirect dengan pesan sukses
        return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim');
    }
}
