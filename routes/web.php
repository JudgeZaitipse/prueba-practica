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
    return view('vista');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/factura/create','FacturaController@store')->name('facturar');
Route::post('/factura/update','FacturaController@update')->name('updateFactura');
Route::post('/factura/delete','FacturaController@destroy')->name('deleteFactura');

