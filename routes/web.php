<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\LoginController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-auth', [LoginController::class, 'LoginBloger'])->name('login.bloger'); 
Route::get('dashboard', [LoginController::class, 'dashboard']);
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/bloger', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('admin/postingan', PostController::class);
    Route::resource('admin/tag', TagController::class);
    Route::resource('admin/category', CategoryController::class);
    
});