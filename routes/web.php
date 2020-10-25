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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home.index');//a
Route::get('/about',[\App\Http\Controllers\AboutController::class,'index'])->name('about.index');//b
Route::get('/news',[\App\Http\Controllers\NewsController::class,'index'])->name('news.index');//c




