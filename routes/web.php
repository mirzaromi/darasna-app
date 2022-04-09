<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/', [HomeController::class,'index']);

Route::get('/admin', [LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/post/{slug}',[PostController::class,'single_post']);


Route::get('/admin/home', function(){
    return view('admin.index',[
        'title1' => 'dashboard',
        'title2' => ''
    ]);
})->middleware('auth');

Route::get('/admin/post/check_slug', [PostController::class, 'check_slug'])->middleware('auth');
Route::resource('/admin/post',PostController::class)->middleware('auth');

Route::resource('/admin/user', UserController::class)->middleware('auth');