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

    // Redirect atau kembali ke halaman daftar kontak dengan pesan sukses
    return redirect()->route('admin.contact.index')->with('success', 'Response sent successfully!');
    }

    public function index()
    {
    // Mengambil semua data kontak dari model Contact
    $contacts = Contact::all();
    return view('admin.contact.index', compact('contacts'));
    }

    public function sendResponse(Request $request, $id)
    {
        $contact = Contact::findOrFail($id); // Pastikan Anda mengimpor model Contact
        $response = $request->input('admin_response');

        // Kirim email
        Mail::to($contact->email)->send(new ContactResponseMail($response));

        return redirect()->back()->with('success', 'Response sent successfully!');
    }
}
