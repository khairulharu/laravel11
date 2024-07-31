<?php

namespace App\Models;

use Illuminate\Support\Arr;
 
class Post 
{
    public static function all() 
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Kylian Haru',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Kim Haru Eyo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Kim Tai Ku',
                'body' => 'Dolor sit amet consectetur adipisicing elit. Facere quidem placeat eos excepturi vel consequuntur porro, eius velit atque? Excepturi perferendis consequatur at nemo voluptas qui minima rerum id minus!'
            ]
            ];
    }

    public static function find($slug):array
    {
          $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

          if (!$post) {
               abort(404);
          }

          return $post;
    }
}