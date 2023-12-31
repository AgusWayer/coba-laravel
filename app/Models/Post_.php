<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [  [
        "title" => "Riwayat Jiwa",
        "slug"=> "riwayat-jiwa",
        "author" => "Gus Wire",
        "body" => "LLorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat sed, tempore omnis quaerat, voluptates distinctio praesentium iure nisi aliquid maiores, qui ratione labore eveniet? Animi quia cupiditate maxime dolorem, neque blanditiis sequi cum minus doloribus nostrum ullam! Illo iusto ducimus maxime voluptate debitis nemo animi, sed sequi ex? Cupiditate doloribus modi, laudantium repudiandae sunt, ipsum hic impedit illum quas officiis nulla perferendis quos deserunt, reprehenderit delectus. Non autem ex quisquam reprehenderit iure, error ipsam quia. Corrupti doloribus minus labore, ullam quaerat possimus adipisci accusamus fugit nemo. Rerum nobis expedita ea tempore facilis delectus dignissimos ipsum dolor, laudantium deleniti, similique consequatur?"
    ],
    [
        "title" => "Lu Yakin Ngab?",
        "slug"=> "lu-yakin-ngab",
        "author" => "Dodi salmonanan",
        "body" => "LLorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat sed, tempore omnis quaerat, voluptates distinctio praesentium iure nisi aliquid maiores, qui ratione labore eveniet? Animi quia cupiditate maxime dolorem, neque blanditiis sequi cum minus doloribus nostrum ullam! Illo iusto ducimus maxime voluptate debitis nemo animi, sed sequi ex? Cupiditate doloribus modi, "
    ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
