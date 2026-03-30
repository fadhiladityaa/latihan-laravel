<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        'nama' => 'Fadhil Aditya',
        'pageTitle' => 'Home Page'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'pageTitle' => 'About'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'pageTitle' => 'Blog',
        'posts' => Post::with(['author', 'category'])->latest()->get()
     ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'pageTitle' => 'Contact',
        'foto' => '1.png',
        'nama' => 'Fadhil Aditya',
        'email' => 'fadhiladitya551@gmail.com',
        'wa' => '085756956684'
    ]);
});

Route::get('/post/{post:slug}', function(Post $post)  {
     
     return view('post', [
        'pageTitle' => 'Single Post',
        'post' => $post
    ]);
});


Route::get('/author/{user:username}', function(User $user) {

    $post = $user->posts->load('author', 'category');

    return view('author', [
        'pageTitle' => count($post) . ' Postingan By. ' . $user->name,
        'posts' => $post
    ]);
});

Route::get('/category/{category:slug}', function(Category $category) {
    $posts = $category->posts->load('category', 'author');
    
    return view('category', [        
        'pageTitle' => 'Post category : ' . $category->name,
        'category' => $category->name,
        'posts' => $posts
    ]);
});

// Route::resource('register', UserController::class) 
//     ->only(['index', 'store']);
//     // ->middleware(['auth', 'verified']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store']);


Route::get('/product-management', [ProductController::class, 'index']);