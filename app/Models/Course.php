<?php

namespace App\Models;



class Course
{
    private static $Course_blog = [
        [
            "id" => 1,
            "title" => "Matematika Minat",
            "slug" => "Matematika Minat",
            "autor" => "Tono Sunardi",
            "body" => "Pelajaran ini dikususkan untuk pelajar SMA jurusan IPA. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam explicabo error, velit dicta suscipit laboriosam harum, autem obcaecati quod iste ipsam esse natus quae saepe adipisci dolorem impedit quia eum! In iure magnam nostrum eligendi doloribus itaque. Excepturi, earum maiores? Ipsam fugiat sit ratione cupiditate labore a. Vero, sed tempora? Maiores accusamus omnis, obcaecati debitis alias ullam sit earum maxime quis libero quas culpa itaque, aperiam est provident enim odit nobis nisi asperiores. Nesciunt voluptatem ex facilis quis sequi. Amet omnis at ipsam eveniet. Aut mollitia quas facilis rem totam nobis consectetur reprehenderit placeat ipsum minima, dolore accusantium consequatur deleniti."

        ],

        [
            "id" => 2,
            "title" => "Matematika Wajib",
            "slug" => "Matematika Wajib",
            "autor" => "Sulfikri Ahmad",
            "body" => "Pelajaran ini dikususkan untuk pelajar SMA baik jurusan IPA ataupun IPS. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam explicabo error, velit dicta suscipit laboriosam harum, autem obcaecati quod iste ipsam esse natus quae saepe adipisci dolorem impedit quia eum! In iure magnam nostrum eligendi doloribus itaque. Excepturi, earum maiores? Ipsam fugiat sit ratione cupiditate labore a. Vero, sed tempora? Maiores accusamus omnis, obcaecati debitis alias ullam sit earum maxime quis libero quas culpa itaque, aperiam est provident enim odit nobis nisi asperiores. Nesciunt voluptatem ex facilis quis sequi. Amet omnis at ipsam eveniet. Aut mollitia quas facilis rem totam nobis consectetur reprehenderit placeat ipsum minima, dolore accusantium consequatur deleniti."

        ],

        [
            "id" => 3,
            "title" => "Fisika",
            "slug" => "Fisika",
            "autor" => "Elis Nanjani",
            "body" => "Pelajaran ini dikususkan untuk pelajar SMA jurusan IPA. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam explicabo error, velit dicta suscipit laboriosam harum, autem obcaecati quod iste ipsam esse natus quae saepe adipisci dolorem impedit quia eum! In iure magnam nostrum eligendi doloribus itaque. Excepturi, earum maiores? Ipsam fugiat sit ratione cupiditate labore a. Vero, sed tempora? Maiores accusamus omnis, obcaecati debitis alias ullam sit earum maxime quis libero quas culpa itaque, aperiam est provident enim odit nobis nisi asperiores. Nesciunt voluptatem ex facilis quis sequi. Amet omnis at ipsam eveniet. Aut mollitia quas facilis rem totam nobis consectetur reprehenderit placeat ipsum minima, dolore accusantium consequatur deleniti."
        ],

        [
            "id" => 4,
            "title" => "Kimia",
            "slug" => "Kimia",
            "autor" => "Viktor Haryanto",
            "body" => "Pelajaran ini dikususkan untuk pelajar SMA jurusan IPA. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam explicabo error, velit dicta suscipit laboriosam harum, autem obcaecati quod iste ipsam esse natus quae saepe adipisci dolorem impedit quia eum! In iure magnam nostrum eligendi doloribus itaque. Excepturi, earum maiores? Ipsam fugiat sit ratione cupiditate labore a. Vero, sed tempora? Maiores accusamus omnis, obcaecati debitis alias ullam sit earum maxime quis libero quas culpa itaque, aperiam est provident enim odit nobis nisi asperiores. Nesciunt voluptatem ex facilis quis sequi. Amet omnis at ipsam eveniet. Aut mollitia quas facilis rem totam nobis consectetur reprehenderit placeat ipsum minima, dolore accusantium consequatur deleniti."
        ],

    ];

    public static function all()
    {
        return collect(self::$Course_blog);
    }

    public static function find($slug)
    {
        $courses = static::all();
        // $course = [];
        // foreach($courses as $c) {
        //    if($c["slug"] === $slug) {
        //        $course = $c;
        //     }
        // }

        return $courses->firstWhere('slug', $slug);
    }
}
