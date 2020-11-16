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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/facturas','FacturaController@index')->name('facturas');
Route::get('/crear-factura','FacturaController@create')->name('crear-factura');
Route::post('/factura','FacturaController@store');
Route::resource('/producto', 'ProductoController');
Route::resource('/pedido', 'PedidoController');
