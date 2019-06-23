<?php

// PAGES

Route::get('/','PageController@mantenimiento');
Route::get('test/','PageController@index');
Route::get('test-ubicacion-descripcion','PageController@ubicacion');
Route::get('test-espacios-valores','PageController@espacios');
Route::get('test-equipo-soporte','PageController@equipo');
Route::get('test-catalogo-acabados','PageController@catalogo');
Route::get('test-contacto','PageController@contacto');

Route::get('apartamentos', function () {
    return view('pages.seccion-plantas');
});

Route::post('mail','PageController@mail');

