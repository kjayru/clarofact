<?php
Route::get('/','LandingController@show');
Route::get('/conoce-tu-recibo','ConoceController@index');
Route::get('/conoce-tu-recibo/{slug}','ConoceController@show');

Route::get('/que-te-paso-este-mes','QuetepasoController@index');
Route::get('/que-te-paso-este-mes/{slug}', 'QuetepasoController@show');

Route::get('/simulador-de-facturacion','SimuladorController@index');
Route::get('/lugares-de-pago','LugaresController@index');
Route::get('/glosario','GlosarioController@index');
Route::get('/glosario/{slug}','GlosarioController@show');
Route::get('/recibo-por-email','ReciboEmailController@index');
Route::get('/preguntas-frecuentes','PreguntasController@index');
Route::get('/lugares-de-pago/bancos/{slug}','LugaresController@show');
Route::get('/lugares-de-pago/{slug}','LugaresController@bancos');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('invoice-items/implement/{id}','Voyager\InvoicesController@implement');
    
    Route::get('setpoints','Voyager\InvoicesController@setpoints');
    Route::post('setpoints','Voyager\InvoicesController@setpoints');

    Route::get('configuracion','Voyager\ConfiguracionController@configure');
    Route::post('configuracion','Voyager\ConfiguracionController@saveconfig')->name('voyager.configuracion');
    
});
