<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\User;


Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/articles', function () {
    

    return view('articles',['title' => 'Artikel', 'articles' => Article::filter()->latest()->paginate(9)]);

    
});

Route::get('/articles/{article:slug}', function(Article $article) {

        return view('article', ['title' => 'Single Article', 'article' => $article]);
});

Route::get('/authors/{user}', function(User $user) {

    return view('articles', ['title' => 'Articles by '. $user->name, 'articles' => $user->articles]);
});
