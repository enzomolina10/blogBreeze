<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome() {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();
        return view('welcome', compact('posts'));
    }

}
