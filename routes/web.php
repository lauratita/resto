<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardGalleryController;
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



Route::get('/', [HomepageController::class, 'index']);
Route::get('/menu', [HomepageController::class, 'menu']);
Route::get('/news', [HomepageController::class, 'news']);
Route::get('/news_detail/{blog:slug}', [HomepageController::class, 'news_detail']);
Route::get('/gallery', [HomepageController::class,'gallery']);

Route::get('/story', function () {
    return view('homepage.story');
});

Route::get('/contact', function () {
    return view('homepage.contact');
});

// dashboard
Route::resource('/admin/gallery', DashboardGalleryController::class);
Route::get('/admin/blogs/checkSlug', [DashboardBlogController::class, 'checkSlug']);
Route::resource('/admin/blog', DashboardBlogController::class);
Route::resource('/admin/menu', DashboardMenuController::class);
Route::resource('/admin/order', OrderController::class);

Route::get('/admin/profile', function () {
    return view('dashboard.profile');
});
Route::get('/admin', function () {
    return view('dashboard.index');
}); 
Route::get('/admin/tes', function () {
    return view('dashboard.tes');
});
Route::resource('/admin/order', OrderController::class);

Route::resource('/admin/menu', DashboardMenuController::class);
