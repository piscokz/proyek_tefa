<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Guest: Show news articles to guests
    public function index()
    {
        $news = News::latest()->paginate(5);
        return view('guest.news.index', compact('news'));
    }

    // Guest: Show full news article
    public function selengkapnya($id)
    {
        $news = News::findOrFail($id);
        return view('guest.news.selengkapnya', compact('news'));
    }

    // Admin: Manage news articles (index)
    public function adminIndex()
    {
        $news = News::latest()->paginate(5);
        return view('admin.news.index', compact('news'));
    }

    // Admin: Show specific news article
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    // Admin: Create a news article
    public function create()
    {
        return view('admin.news.create');
    }

    // Admin: Store a newly created news article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news-images', 'public');
            $validated['image'] = $path;
        }

        News::create($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    // Admin: Edit news article
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    // Admin: Update news article
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $path = $request->file('image')->store('news-images', 'public');
            $validated['image'] = $path;
        }

        $news->update($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diupdate');
    }

    // Admin: Delete a news article
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus');
    }

    // Admin: Search news articles
    public function search(Request $request)
    {
        $query = $request->input('query');
        $news = News::where('title', 'LIKE', "%{$query}%")->paginate(5);
        return view('admin.news.index', compact('news'));
    }

    // Guest: Search for news articles
    public function searching(Request $request)
    {
        $query = $request->input('query');
        $news = News::where('title', 'LIKE', "%{$query}%")
                    ->orWhere('content', 'LIKE', "%{$query}%")
                    ->paginate(5);
        return view('guest.news.index', compact('news', 'query'));
    }


}
