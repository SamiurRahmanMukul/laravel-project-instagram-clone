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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user/{following_id}/{follower_id}/follow', [App\Http\Controllers\HomeController::class, 'follow'])->name('follow');
Route::get('user/{following_id}/{follower_id}/unfollow', [App\Http\Controllers\HomeController::class, 'unfollow'])->name('unfollow');
Route::get('/user/profile/{id}',[App\Http\Controllers\HomeController::class, 'userProfile']);
Route::put('/add-bio/{id}',[App\Http\Controllers\HomeController::class, 'updateProfile']);
