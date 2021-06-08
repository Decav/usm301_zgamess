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

Route::view("/","home")->name("home");
Route::view("/ver_consola","ver_consola")->name("ver_consola");
Route::view("/ver_juego","ver_juego")->name("ver_juego");
Route::view("/agregar_juego","agregar_juego")->name("agregar_juego");

