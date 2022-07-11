<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reynardo Etantyo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero tenetur harum excepturi totam itaque, perferendis sit neque odit aspernatur voluptas, doloremque voluptatem ducimus porro vitae commodi est quam quisquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel nostrum expedita commodi itaque, voluptatibus fuga nihil accusantium quo ipsum asperiores dolorem hic sint aliquam veritatis molestias, ea ipsa sequi natus?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Giovanni Kurniawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero tenetur harum excepturi totam itaque, perferendis sit neque odit aspernatur voluptas, doloremque voluptatem ducimus porro vitae commodi est quam quisquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel nostrum expedita commodi itaque, voluptatibus fuga nihil accusantium quo ipsum asperiores dolorem hic sint aliquam veritatis molestias, ea ipsa sequi natus?"
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
