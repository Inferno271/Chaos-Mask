<?php


namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('user')->latest()->simplePaginate(3);
        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        return view('blog.show', compact('post'));
    }
}
