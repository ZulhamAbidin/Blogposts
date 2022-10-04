<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('list', [
            "judul" => "Blogs",
            "blogs" => Blog::latest()->get(),
        ]);
    }

    public function index2()
    {
        return view('/home', [
             "judul" => "Home",
            "blogs" => Blog::latest()->get(),
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog', [
            "judul" => "Single Blog",
            "blogs" => $blog,
        ]);
    }
}
