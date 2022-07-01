<?php

use Illuminate\Support\Facades\Route;

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
        "name" => "Hamas Afif Aswari",
        "email" => "cyberhamas@gmail.com",
        "image" => "img/photo.png"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hamas Afif Aswari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ex ipsum neque quisquam dolorum provident velit possimus, deleniti et totam nobis itaque cupiditate natus, repellendus sapiente officia culpa similique magni libero nostrum corrupti quis ut perferendis. Similique, suscipit quasi ab porro distinctio aut. Tenetur iure, sunt excepturi quia possimus numquam dolor sequi, suscipit maxime voluptate quisquam! Nulla quia voluptatem quis at quae consectetur earum corporis ex laboriosam excepturi, nostrum autem enim sit repellat nemo incidunt voluptate accusantium atque ea? Libero, quasi! Blanditiis voluptates, facilis reiciendis quod mollitia error explicabo fugiat. Perspiciatis cupiditate consequatur provident quidem fugit sit aliquid soluta labore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "M.Lutfi K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ex ipsum neque quisquam dolorum provident velit possimus, deleniti et totam nobis itaque cupiditate natus, repellendus sapiente officia culpa similique magni libero nostrum corrupti quis ut perferendis. Similique, suscipit quasi ab porro distinctio aut. Tenetur iure, sunt excepturi quia possimus numquam dolor sequi, suscipit maxime voluptate quisquam! Nulla quia voluptatem quis at quae consectetur earum corporis ex laboriosam excepturi, nostrum autem enim sit repellat nemo incidunt voluptate accusantium atque ea? Libero, quasi! Blanditiis voluptates, facilis reiciendis quod mollitia error explicabo fugiat. Perspiciatis cupiditate consequatur provident quidem fugit sit aliquid soluta labore."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hamas Afif Aswari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ex ipsum neque quisquam dolorum provident velit possimus, deleniti et totam nobis itaque cupiditate natus, repellendus sapiente officia culpa similique magni libero nostrum corrupti quis ut perferendis. Similique, suscipit quasi ab porro distinctio aut. Tenetur iure, sunt excepturi quia possimus numquam dolor sequi, suscipit maxime voluptate quisquam! Nulla quia voluptatem quis at quae consectetur earum corporis ex laboriosam excepturi, nostrum autem enim sit repellat nemo incidunt voluptate accusantium atque ea? Libero, quasi! Blanditiis voluptates, facilis reiciendis quod mollitia error explicabo fugiat. Perspiciatis cupiditate consequatur provident quidem fugit sit aliquid soluta labore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "M.Lutfi K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ex ipsum neque quisquam dolorum provident velit possimus, deleniti et totam nobis itaque cupiditate natus, repellendus sapiente officia culpa similique magni libero nostrum corrupti quis ut perferendis. Similique, suscipit quasi ab porro distinctio aut. Tenetur iure, sunt excepturi quia possimus numquam dolor sequi, suscipit maxime voluptate quisquam! Nulla quia voluptatem quis at quae consectetur earum corporis ex laboriosam excepturi, nostrum autem enim sit repellat nemo incidunt voluptate accusantium atque ea? Libero, quasi! Blanditiis voluptates, facilis reiciendis quod mollitia error explicabo fugiat. Perspiciatis cupiditate consequatur provident quidem fugit sit aliquid soluta labore."
        ],
    ];


    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});