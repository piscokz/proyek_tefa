<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class NotificationController extends Controller
{
    // Fungsi untuk menampilkan dashboard (misalnya)
    public function index()
    {
        $contacts = Contact::where('status', 'new')->get();
        return view('admin.dashboard.index', compact('contacts'));
    }

    public function getNotifications()
    {
        // Fetch only unread notifications
        $contacts = Contact::where('is_read', false)->get();

        // Return notifications as JSON for AJAX
        return response()->json(['contacts' => $contacts]);
    }

    public function respond($id)
    {
        // Find the notification by ID
        $contact = Contact::find($id);

        if ($contact) {
            // Mark the notification as read
            $contact->is_read = true;
            $contact->save();

            // Redirect to the response page
            return redirect()->route('admin.contact.respond', $contact->id);
        }

        // Handle notification not found case
        return redirect()->route('admin.dashboard.index')->with('error', 'Notification not found.');
    }

}
