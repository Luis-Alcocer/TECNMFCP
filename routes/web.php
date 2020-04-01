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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@index');
Route::resource('usuarios', 'UsuarioController')->middleware('auth');
Route::resource('informacion_gral/objetivo', 'ObjetivosGralController');
Route::resource('informacion_gral/perfil_egreso', 'PerfilEgresoController');
