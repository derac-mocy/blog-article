<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;


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

Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [ArticleController::class, 'show']);
Route::get('/articles/add', [ArticleController::class, 'create']);
Route::post('/articles/add', [ArticleController::class, 'store']);
Route::get('/articles/delete/{id}', [ArticleController::class, 'destroy']);

Route::post('/comments/add', [CommentController::class, 'store']);
Route::get('/comments/delete/{id}', [CommentController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\ArticleController::class, 'index'])->name('home');
