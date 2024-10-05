<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactResponseMail; // Pastikan ini ada

class ContactController extends Controller
{
    // Menambahkan metode showRespondForm
    public function showRespondForm($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.respond', compact('contact'));
    }

    // Menambahkan metode respond
    public function respond(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        
        // Mengambil respon admin dari form
        $response = $request->input('admin_response');

        // Kirim email ke tamu
        Mail::to($contact->email)->send(new ContactResponseMail($contact, $response));

        // Hapus entri kontak setelah mengirim email
        $contact->delete();

        // Redirect atau kembali ke halaman daftar kontak dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Response sent successfully and contact deleted!');
    }

    public function index()
    {
        // Mengambil semua data kontak dari model Contact
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        // Validasi permintaan yang masuk
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'title' => 'required|string|max:50',
        ]);

        // Membuat instance kontak baru dan menyimpannya ke database
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->title = $request->input('title');
        $contact->message = $request->input('message');
        $contact->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
