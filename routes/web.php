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

// redirecciona todos las peticiones a la calculaodora
/*Route::get('/{any}', function(){
	return view('fibra/calculadora');
});*/

Route::get('/', function () {
	return view('fibra/fibra_index');
    //return view('fibra/calculadora');
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

Route::get('/configurar-apn-Digi','SettingsController@index')->name('ajustes');

// contactar
Route::get('/contacto','Contact\ContactController@create');
Route::post('/contacto/enviar', 'Contact\ContactController@save');

/**------------------------------------------------------

| CALCULADORA TARIFAS FIBRA 

|
*/

Route::get('/calculadora', 'CalculadoraController@index');

// for https

