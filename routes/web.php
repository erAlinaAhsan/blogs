<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    // Find a post by its slug and pass it to a view called "post".  

    return view('post', [
        'post' => $post
    ]);
});
Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});
Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});
