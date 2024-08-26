<?php

use App\Http\Controllers\MovieController;
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

Route::get('/index', [MovieController::class, 'index'])->name('index');
Route::get('/', [MovieController::class, 'movie_list'])->name('movie_list');
Route::get('/movie/create', [MovieController::class, 'movie_create'])->name('movie_create');
Route::get('/movie/detail', [MovieController::class, 'movie_detail'])->name('movie_detail');
Route::post('/movie/upload', [MovieController::class, 'movie_upload'])->name('movie_upload');
