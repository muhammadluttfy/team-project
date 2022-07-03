<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }

}   
