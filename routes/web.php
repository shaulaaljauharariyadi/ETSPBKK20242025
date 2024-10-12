<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/articles', function () {
    return view('articles',['title' => 'Artikel', 'articles' => Article::all()]);
});

Route::get('/articles/{article:slug}', function(Article $article) {

        return view('article', ['title' => 'Single Article', 'article' => $article]);
});
