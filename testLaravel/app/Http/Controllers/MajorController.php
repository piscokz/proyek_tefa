<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\News; // Add this line to import the News model
use App\Models\Contact; // If Contact model is used, import it as well
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
{
    public function index()
    {
        // Get counts for the dashboard
        $newsCount = News::count();
        $majorsCount = Major::count();
        $contactsCount = Contact::count();

        // Get paginated majors
        $majors = Major::paginate(6);

        // Pass the counts to the view
        return view('admin.major.index', compact('majors', 'newsCount', 'majorsCount', 'contactsCount'));
    }

    public function create()
    {
        return view('admin.major.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|min:30',
        ]);

        // Handle image upload
        $imagesName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imagesName);

        // Use Eloquent to insert a new major
        Major::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'image' => 'images/' . $imagesName,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil ditambahkan.');
    }

    public function show($id)
    {
        $major = Major::find($id);

        if (!$major) {
            return redirect()->route('major.index')->with('error', 'Program keahlian tidak ditemukan.');
        }

        return view('admin.major.show', compact('major'));
    }

    public function edit($id)
    {
        $major = Major::find($id);
        return view('admin.major.edit', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required|min:5',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|min:30',
        ]);

        $major = Major::find($id);

        // Handle image upload if a new image is provided
        $imagePath = $major->image; // Default to the current image
        if ($request->hasFile('image')) {
            $imagesName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imagesName);
            $imagePath = 'images/' . $imagesName; // Update to the new image path
        }

        // Update major details
        $major->update([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'image' => $imagePath,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Major::destroy($id);
        return redirect()->route('major.index')->with('success', 'Program keahlian berhasil dihapus.');
    }

    public function indexGuest()
    {
        // Display all majors without pagination for guest view
        $majors = Major::all();
        return view('guest.majors.index', compact('majors'));
    }

    public function showGuest($id)
    {
        $major = Major::find($id); // Fetch the specific major

        if (!$major) {
            return redirect()->route('majors.index')->with('error', 'Program keahlian tidak ditemukan.');
        }

        return view('guest.majors.show', compact('major')); // No pagination for show page
    }
}
