<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('post', 'AhmadFatoni\ApiGenerator\Controllers\API\postController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('post/{id}/delete', ['as' => 'post.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\postController@destroy']);
Route::resource('art', 'AhmadFatoni\ApiGenerator\Controllers\API\ArtController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('art/{id}/delete', ['as' => 'art.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\ArtController@destroy']);