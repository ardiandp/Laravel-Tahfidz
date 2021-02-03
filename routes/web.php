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

//surat
Route::get('/alquran', [App\Http\Controllers\AlquranController::class, 'index'])->name('alquran');
Route::get('/alquran/all', [App\Http\Controllers\AlquranController::class, 'all'])->name('alquran/all');

//hadist 
Route::get('/hadist', [App\Http\Controllers\HadistController::class, 'index'])->name('hadist');