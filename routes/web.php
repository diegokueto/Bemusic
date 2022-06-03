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

Route::get('/buscar', function () {
    return view('buscar');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/instrumento', function () {
    return view('instrumento');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/comunidad', function () {
    return view('comunidad');
});

Route::get('/información', function () {
    return view('información');
});


Auth::routes();

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');

Route::resource('instrumentos', App\Http\Controllers\InstrumentoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
