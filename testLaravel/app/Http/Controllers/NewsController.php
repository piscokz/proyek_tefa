<?php

namespace App\Http\Controllers;

use App\Models\News; // Make sure to import your News model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function selengkapnya($id)
    {
    $news = News::findOrFail($id); // Fetch the specific news item by ID
    return view('guest.news.selengkapnya', compact('news')); // Pass the news item to the view
    }

    public function index()
    {
        // Fetch the latest news with pagination
        $news = News::latest()->paginate(5);

        // Return the view with the fetched news
        return view('guest.news.index', compact('news'));
    }

    // Other methods...

    

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    // Admin - CRUD berita
    public function adminIndex()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news-images', 'public');
            $validated['image'] = $path;
        }

        News::create($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }

            $path = $request->file('image')->store('news-images', 'public');
            $validated['image'] = $path;
        }

        $news->update($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diupdate');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus');
    }

    
}

class GuestController extends Controller
{
    public function kabarlensa()
    {
        // Fetch the news items from the database
        $news = News::latest()->paginate(10); // Fetch the latest news with pagination
        return view('guest.news.show', compact('news')); // Pass the news variable to the view
    }
}
