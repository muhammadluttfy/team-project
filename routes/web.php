<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        'users' => User::all(),
        // get post by user id 1
        'posts_1' => Post::where('user_id', 1)->get()->count(),
        'posts_2' => Post::where('user_id', 2)->get()->count(),
        'posts_3' => Post::where('user_id', 3)->get()->count(),
        'posts_4' => Post::where('user_id', 4)->get()->count(),
        "image" => "img/photo.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'post']);

Route::get('/categories', function () {
    return view('categories', [
        'title' =>  'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->name('dashboard')->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
    ->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::get('/dashboard/posts', [DashboardPostController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->middleware('auth');
// Route::post('/dashboard/posts/create', [DashboardPostController::class, 'store'])->middleware('auth');
// Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->middleware('auth');
