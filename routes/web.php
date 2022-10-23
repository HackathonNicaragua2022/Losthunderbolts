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
    return view('medicoffice');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/consultorio', function () {
    return view('consultorio');
});
Route::get('/medicos', function () {
    return view('medicos');
});
Route::get('/chats', function () {
    return view('chats');
});
Route::get('/chatspaciente', function () {
    return view('chatspaciente');
});
Route::get('/transacciones', function () {
    return view('transacciones');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/perfilmedico', function () {
    return view('perfilmedico');
});
Route::get('/formularioregistro', function () {
    return view('formularioregistro');
});
Route::get('/loginpacientes', function () {
    return view('loginpacientes');
});
Route::get('/reservacita', function () {
    return view('reservacita');
});