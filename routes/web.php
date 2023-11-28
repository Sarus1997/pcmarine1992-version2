<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;


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
    return view('home');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('stroy', function () {
    return view('story');
})->name('story');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('news-1', function () {
    return view('news.news-1');
})->name('news-1');

Route::get('news-2', function () {
    return view('news.news-2');
})->name('news-2');

Route::get('news-3', function () {
    return view('news.news-3');
})->name('news-3');

Route::get('slug1', function () {
    return view('services.slug1');
})->name('slug1');

Route::get('slug2', function () {
    return view('services.slug2');
})->name('slug2');




Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
