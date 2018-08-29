<?php
Route::get('/','LandingController@show');
Route::get('/como-leer-tu-recibo-movil','ConoceController@index');
Route::get('/como-leer-tu-recibo-movil/{slug}','ConoceController@show');

Route::get('/que-te-paso-este-mes','QuetepasoController@index');
Route::get('/que-te-paso-este-mes/{slug}', 'QuetepasoController@show');

Route::get('/simulador-de-facturacion','SimuladorController@index');
Route::get('/lugares-de-pago','LugaresController@index');
Route::get('/glosario-de-facturacion','GlosarioController@index');
Route::get('/glosario-de-facturacion/{slug}','GlosarioController@show');
Route::get('/que-es-el-recibo-por-email','ReciboEmailController@index');
Route::get('/dudas-y-preguntas-frecuentes','PreguntasController@index');
Route::get('/lugares-de-pago/bancos/{slug}','LugaresController@show');
Route::get('/lugares-de-pago/{slug}','LugaresController@bancos');

Route::get('/linea-nueva-postpago','LandingController@lineanueva');




Route::get('/dudas-sobre-tu-facturacion/{cat?}/{subcat?}/{subsubcat?}/{ssubsubcat?}/{sssubsubcat?}/{ssssubsubcat?}','PageLoaderController@index', function ($cat,$subcat,$subcat1,$subcat2,$subcat3,$subcat4) {
   
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('invoice-items/implement/{id}','Voyager\InvoicesController@implement');
    Route::delete('invoice-items/implement/punto/{id}','Voyager\InvoicesController@borrarpunto');
    Route::delete('invoice-items/implement/layer/{id}','Voyager\InvoicesController@borrarcapa');
    Route::get('setpoints','Voyager\InvoicesController@setpoints');
    Route::post('setpoints','Voyager\InvoicesController@setpoints');

    Route::get('configuracion','Voyager\ConfiguracionController@configure');
    Route::post('configuracion','Voyager\ConfiguracionController@saveconfig')->name('voyager.configuracion');
    
});
