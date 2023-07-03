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

Route::resource('libros', App\Http\Controllers\LibroController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('editorial', App\Http\Controllers\EditorialController::class);

Route::resource('usuario', App\Http\Controllers\UsuarioController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



