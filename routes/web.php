<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardOrderController;

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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Homepage
Route::get('/', [HomepageController::class, 'index']);
Route::get('/menu', [HomepageController::class, 'menu']);
Route::get('/news', [HomepageController::class, 'news']);
Route::get('/news_detail/{blog:slug}', [HomepageController::class, 'news_detail']);
Route::get('/gallery', [HomepageController::class, 'gallery']);
Route::get('/story', [HomepageController::class, 'story']);
Route::get('/contact', [HomepageController::class, 'contact']);
Route::get('/payment', [HomepageController::class, 'payment']);
Route::get('/tes', [HomepageController::class, 'showPaymentFromCreaete']);

Route::get('/', [HomepageController::class, 'index']);
Route::get('/menu', [HomepageController::class, 'menu']);
Route::get('/menu/cetak_pdf', [HomepageController::class, 'cetak_pdf']);
Route::get('/gallery', [HomepageController::class, 'gallery']);

Route::get('/menu/cetak_pdf', [HomepageController::class, 'cetak_pdf']);

Route::post('/create/order', [HomepageController::class, 'create_order']);
Route::put('/image', [HomepageController::class, 'update_payment']);
Route::post('/showOrder', [HomepageController::class, 'payment']);

//send email
// Route::post('/send',[HomepageController::class,'send'])->name('send.email');

// Route::post('/order/check', [HomepageController::class, 'check_payment']);

// dashboard
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/admin/gallery', DashboardGalleryController::class)->middleware('auth');
Route::get('/admin/blogs/checkSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/blog', DashboardBlogController::class)->middleware('auth');
Route::resource('/admin/menu', DashboardMenuController::class)->middleware('auth');
// Route::get('/admin/menu', DashboardMenuController::class, 'menu')->middleware('auth');
Route::resource('/admin/order', DashboardOrderController::class)->middleware('auth');
Route::put('/order/check/{order}', [DashboardOrderController::class, 'check_payment'])->middleware('auth');
// Route::get('/admin', function () {
//     return view('dashboard.index');
// })->middleware('auth');
Route::get('/admin/tes', function () {
    return view('dashboard.tes');
});
Route::resource('/admin/menu', DashboardMenuController::class);
// Route::resource('/admin/menu', DashboardMenuController::class);
