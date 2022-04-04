<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);
Route::get('/posts/all', [PostsController::class, 'getPosts']);
Route::get('/posts/{post}', [PostsController::class, 'getPost']);


//quando uma rota tem um prefixo (nao recebe parametro), deve vir primeiro
Route::get('/user/me', [UserController::class, 'getMeProfile'])->name('user-profile');

Route::get('/user/{username}', [UserController::class, 'getProfile'])->where('username', '[A-Z]+');

Route::get('/test', [UserController::class, 'test']);