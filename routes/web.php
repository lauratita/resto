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
    return view('homepage.index');
});
Route::get('/menu', function () {
    return view('homepage.menu');
});
Route::get('/gallery', function () {
    return view('homepage.gallery');
});
Route::get('/story', function () {
    return view('homepage.story');
});
Route::get('/news', function () {
    return view('homepage.news');
});
Route::get('/contact', function () {
    return view('homepage.contact');
});

// dashboard
Route::get('/admin', function () {
    return view('dashboard.index');
});