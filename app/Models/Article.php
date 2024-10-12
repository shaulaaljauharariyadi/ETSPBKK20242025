<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class Article {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-1',
                'title' => 'Judul 1',
                'author' => 'Ayam Goreng',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consectetur maxime deserunt cumque ad, 
                obcaecati voluptatum numquam ullam, 
                iste ea eos consequuntur ut ducimus provident, 
                tempore magni quia dolor illo.'  
            ],
    
            [
                'id' => 2,
                'slug' => 'judul-2',
                'title' => 'Judul 2',
                'author' => 'Steak Tenderloin',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius consectetur maxime deserunt cumque ad, 
                obcaecati voluptatum numquam ullam, 
                iste ea eos consequuntur ut ducimus provident, 
                tempore magni quia dolor illo.'  
            ]
            ];
    }

    public static function find($slug): array {


        $article = Arr::first(static::all(), fn($article) => $article['slug'] == $slug);

        if(! $article) {
            abort(404);
        }

        return $article;
    }
}