<?php

use App\Http\Controllers\DashboardGalleryController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::resource('/admin/gallery', DashboardGalleryController::class);
Route::get('/admin/profile', function () {
    return view('dashboard.profile');
});
Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::get('/admin/order', function () {
    return view('dashboard.order');
});

Route::get('/admin/blogs', function () {
    return view('dashboard.blogs');
});
Route::get('/admin/menu', function () {
    return view('dashboard.menu');
});
