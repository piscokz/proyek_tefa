<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Sesuaikan model yang kamu gunakan

class NotificationController extends Controller
{
    // Fungsi untuk menampilkan dashboard (misalnya)
    public function index()
    {
        $contacts = Contact::where('status', 'new')->get();
        return view('admin.dashboard', compact('contacts'));
    }

    public function getNotifications()
{
    $contacts = Contact::where('is_read', false)->get(); // Hanya ambil notifikasi yang belum dibaca
    return response()->json(['contacts' => $contacts]); // Kirim sebagai JSON
}

    public function respond($id)
    {
    $contact = Contact::find($id);
    
    if ($contact) {
        // Tandai notifikasi sebagai dibaca
        $contact->is_read = true;
        $contact->save();
        
        // Redirect ke halaman respons
        return redirect()->route('admin.contact.respond', $contact->id);
    }

    // Handle jika notifikasi tidak ditemukan
    return redirect()->route('admin.dashboard')->with('error', 'Notification not found.');
    }


}
