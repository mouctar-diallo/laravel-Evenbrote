<?php

Auth::routes();

/*Route::get('/events', 'EventController@index')->name('index');
Route::get('/events/create', 'EventController@create')->name('create');
Route::post('events/store', 'EventController@store')->name('store');
Route::get('/events/show/{id}', 'EventController@show')->name('show');
Route::get('/events/edit/{id}', 'EventController@edit')->name('edit');
Route::post('/events/update', 'EventController@update')->name('update');
Route::get('/events/delete/{id}', 'EventController@destroy')->name('delete');*/

//au lieu de tracer les routes pour chaque action comme ci dessus
//on peut utiliser la ligne ci dessous tout en respectant REST

//pour plus d'info sur REST taper la commande php artisan route:list 
//vous allez voir coment tracer les routes pour chaque methode dans le controller

Route::resource('events', 'EventController');



