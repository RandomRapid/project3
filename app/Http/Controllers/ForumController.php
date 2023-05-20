<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumPost; // Make sure to import the correct model

class ForumController extends Controller
{
    public function index()
    {
        $posts = ForumPost::orderBy('date', 'desc')->get();
        return view('forum', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post' => 'required',
        ]);

        $username = $request->input('username');
        $text = $request->input('post');
        $date = now();

        $post = new ForumPost();
        $post->username = $username;
        $post->text = $text;
        $post->date = $date;
        $post->save();

        return redirect()->route('forum.index');
    }
}