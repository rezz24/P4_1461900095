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
    return view('home0095');
});
Route::get('/buku', function () {
    return view('buku0095');
});

Route::get('/buku', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/buku/export_excel', 'App\Http\Controllers\MahasiswaController@export_excel');