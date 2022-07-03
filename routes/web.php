<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Hamas Afif Aswari",
        "email" => "cyberhamas@gmail.com",
        "image" => "img/photo.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'post']);

Route::get('/categories', function(){
    return view('categories',[
        'title' =>  'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('user', 'category')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('user', 'category'),
    ]);
});