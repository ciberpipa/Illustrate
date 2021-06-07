<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuiaController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\PostController;
use App\http\Controllers\CommentController;

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

Route::resource('guias', GuiaController::class);
Route::resource('posts', PostController::class);
Route::resource('topics', TopicController::class);
Route::resource('comments', CommentController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
