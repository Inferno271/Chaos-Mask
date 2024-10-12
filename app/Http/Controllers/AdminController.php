<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mask;
use App\Models\BlogPost;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $masksCount = Mask::count();
        $blogPostsCount = BlogPost::count();
        return view('admin.dashboard', compact('usersCount', 'masksCount', 'blogPostsCount'));
    }

    public function users()
    {
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function masks()
    {
        $masks = Mask::paginate(20);
        return view('admin.masks', compact('masks'));
    }

    public function blogPosts()
    {
        $posts = BlogPost::paginate(20);
        return view('admin.blog.index', compact('posts'));
    }
}
