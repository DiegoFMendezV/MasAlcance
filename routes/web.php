<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\LogsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users', [UsersController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'index']);
Route::get('/albums/{id}', [AlbumsController::class, 'index']);

Route::get('/logs', [LogsController::class, 'index']);
