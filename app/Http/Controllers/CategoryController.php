<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('articles')->get();
        return view('categories.index', compact('categories'));
    }

}
