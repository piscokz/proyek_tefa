<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactResponseMail;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    // Menampilkan form respon berdasarkan ID kontak
    public function showRespondForm($id)
    {
        $contact = Contact::findOrFail($id);
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
        $response = $request->input('admin_response');

        // Kirim email ke tamu
        Mail::to($contact->email)->send(new ContactResponseMail($contact, $response));

        // Hapus kontak setelah mengirim email
        $contact->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Response sent successfully and contact deleted!');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:50',
            'message' => 'required|string',
            // No need to validate the profile_image as it's now optional
        ]);
    
        // Get the Gravatar URL based on the email
        $email = strtolower(trim($request->email));
        $gravatarUrl = 'https://www.gravatar.com/avatar/' . md5($email) . '?s=200&d=mp';
    
        // Store the contact message in the database or handle it as needed
        // Assuming you have a Contact model
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
            'profile_image' => $gravatarUrl, // Store the Gravatar URL
        ]);
    
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
