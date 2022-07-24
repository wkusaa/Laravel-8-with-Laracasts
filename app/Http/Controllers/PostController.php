<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //listen to DB changes and log them into laravel.log
        // \Illuminate\Support\Facades\DB::listen(function ($query) {
        //     logger($query->bindings);
        // });
        return view('posts.index', [
            //the category and author are attributes decalred in table, not the table name in the db
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function show(Post $post) // Post::where('slug', $post->firstOrFail)
    {
        //Find a post by its slug and pass it to a view called "post"
        return view('posts.show', [
            'post' => $post,
        ]);
    }

}
