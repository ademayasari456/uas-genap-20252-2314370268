<?php

namespace App\Http\Controllers;

use App\Models\Article;  // Pastikan model Article sudah di-import
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'comments'])->get();
        return view('articles.index', compact('articles'));
    }


    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'is_publish' => 'required|boolean',
    ]);

    Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'slug' => Str::slug($request->title) . '-' . time(), // ⬅️ BARIS PENTING INI!
        'category_id' => $request->category_id,
        'is_publish' => $request->is_publish,
        'published_at' => $request->is_publish ? now() : null,
    ]);

    return redirect()->route('articles.index')->with('success', 'Artikel berhasil disimpan!');

    if ($request->filled('comment')) {
    $article->comments()->create([
        'content' => $request->comment
    ]);
}
}

    public function create()
    {
    $categories = Category::all(); // Ambil semua kategori untuk ditampilkan di form
    return view('articles.create', compact('categories'));
    }

    public function edit(Article $article)
    {
    $categories = \App\Models\Category::all();
    return view('articles.edit', compact('article', 'categories'));
    }
}
