<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index']);

Route::get('/book-detail/{book}', [BookController::class, 'show']);

Route::get('/book-category/{category}', [BookController::class, 'category']);

Route::get('/category', function () {
    return view('category');
});

Route::get('/book/publisher/{publisher}', [BookController::class, 'publisher']);

Route::get('/contact', [BookController::class, 'contact']);
