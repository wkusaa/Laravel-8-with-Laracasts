<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all(),
    ]);
});

// By default Laravel will match with the primary key id column if the Model is passed without
// specifying the column
Route::get("post/{post:slug}", function (Post $post) { // Post::where('slug', $post->firstOrFail)
    //Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => $post,
    ]);

});
