<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->simplepaginate(1);
        return view('index', compact('posts'));
    }

    public function search(Request $request)
    {

        $search_text = $request->search;


        $posts = Post::orderBy('id', 'desc')
            ->where('title', 'like', '%' . $search_text . '%')
            ->orWhere('description', 'like', '%' . $search_text . '%')
            ->get();

        return view('search')->withPosts($posts);

    }
}
