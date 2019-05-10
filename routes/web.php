<?php

// PAGES
Route::get('/','PageController@index');
Route::get('ubicacion-descripcion','PageController@ubicacion');
Route::get('espacios-valores','PageController@espacios');
Route::get('equipo-soporte','PageController@equipo');
Route::get('catalogo-acabados','PageController@catalogo');
Route::get('contacto','PageController@contacto');
