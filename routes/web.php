<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('homePage');

Route::get('/index-article', function(){
    return view('index');
})->name('articleIndex');

Route::get('/update-article/{article}/edit', function(Article $article){
    return view('update', compact('article'));
})->name('updateArticle');