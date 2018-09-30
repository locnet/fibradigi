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
    return view('fibra/fibra_index');
});

Route::post('/fibra/lista-espera', 'Fibra\MainController@store');

Route::get('/paquete-fibra-digi-con-movil-incluido',function() {

	return view('fibra/digipack');

})->name('digipack');

Route::get('/digi-mobil-tarifas', function() {
	return view('fibra/movil');
});

Route::get('/calcula-tarifa-fibra-digi', function() {

	return view('fibra/calculadora');
});

