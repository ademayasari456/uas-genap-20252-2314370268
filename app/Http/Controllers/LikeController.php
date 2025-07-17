<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Article;

class LikeController extends Controller
{
    public function store($id)
    {
        $article = Article::findOrFail($id);

        // Cek apakah sudah like dari IP yang sama (bisa kamu modifikasi)
        $existingLike = $article->likes()->where('ip_address', request()->ip())->first();

        if (!$existingLike) {
            $article->likes()->create([
                'ip_address' => request()->ip(),
            ]);
        }

        return back(); // kembali ke halaman sebelumnya
    }
}
