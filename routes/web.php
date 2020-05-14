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

Route::resource('/pais', 'PaisesController');
Route::resource('/ciudad', 'CiudadesController');
Route::resource('/caso', 'CasosController');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');