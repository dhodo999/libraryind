<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('search', [BookController::class, 'search'])->name('home.search');

Route::get('show', [BookController::class, 'show'])->name('home.show');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('home', BookController::class);
});
