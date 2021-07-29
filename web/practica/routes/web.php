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

Route::view("/ingresar_a","ingresar_a")->name("ingresar_a");

Route::view("/ingresar_b","ingresar_b")->name("ingresar_b");

Route::view("/ver_a","ver_a")->name("ver_a");

Route::view("/ver_b","ver_b")->name("ver_b");
