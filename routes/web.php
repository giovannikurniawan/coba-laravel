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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "giovanni kurniawan",
        "email" => "giovanni@gmail.com"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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
        ],
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => 'Single Post',
        "post" => $new_post
    ]);
});
