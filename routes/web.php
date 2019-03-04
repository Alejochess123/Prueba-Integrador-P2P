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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/transaccion','TransaccionController@formulario_entrada');

Route::get('/transaccion/listar','TransaccionController@listar_transacciones');

Route::match(['get','post'],'/transaccion/form','TransaccionController@formulario_entrada_form');
