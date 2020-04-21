<?php

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
//CREAR VISTAS
Route::get('/administrador', function () {
    return view('administrador');
});
Route::get('/monitor', function () {
    return view('monitor');
});
Route::get('/registroMonitor', function () {
    return view('registroMonitor');
});
Route::get('/controlSala', function () {
    return view('controlSala');
});
Route::get('/prueba', function() {
    return view('prueba');
})->name('prueba');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');