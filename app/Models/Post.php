<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ratria Seza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ab iste debitis amet, ipsum asperiores, id sed, laudantium ipsa ducimus cumque deleniti dolorum magni voluptate illum illo dignissimos nobis recusandae!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Boy Hord",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam ipsum itaque, at ducimus consequuntur exercitationem, facilis inventore beatae assumenda cumque iusto illo neque eligendi? Voluptate, adipisci consectetur blanditiis amet maxime praesentium delectus qui ipsam explicabo tenetur assumenda quae nam repellendus aperiam minima quod hic voluptatem quas molestias animi dignissimos! Voluptate esse ipsum ducimus dolore placeat nihil, consequuntur odio. Vel, ab nemo facere at doloribus earum eos quisquam, neque cupiditate nihil placeat sapiente recusandae enim debitis culpa ipsum temporibus rerum minus fuga repudiandae. Tempore est quasi numquam repellat excepturi inventore, accusantium cumque repudiandae nam ipsum rerum nihil incidunt necessitatibus magni exercitationem."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
