<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($post) {
                $post->thumbnailUrl = $post->getFirstMediaUrl('posts');
                return $post;
            });
        return view('homepage', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->thumbnailUrl = $post->getFirstMediaUrl('posts');
        return view('post', compact('post'));
    }
}
