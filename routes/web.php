<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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
    return view('pages.welcome');
});


Route::get('/about', fn()=> view('pages.about'));

Route::get('/news', [NewsController::class, 'index'])->name('news.list');


Route::get('/news/{id}', [NewsController::class, 'single_news'])
    ->where('id', '\d+')
    ->name('news.show');


Route::get('/news/category/{category_id}', [NewsController::class, 'news_by_category'])
    ->where('category_id', '\d+')
    ->name('news.category.show');


//Route::get('/news', [])->name();
