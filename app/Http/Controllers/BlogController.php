<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = blogs::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }
}
