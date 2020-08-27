<?php
/**
 * Service
 */
Route::post('service', 'Admin\ServiceController@post');
Route::get('services', 'Admin\ServiceController@get');
Route::get('service/{slug}', 'Admin\ServiceController@edit');
Route::put('service/{id}', 'Admin\ServiceController@update');
Route::delete('service/id', 'Admin\ServiceController@delete');


/**
 * Article
 */
Route::post('article', 'Admin\ArticleController@post');
Route::get('articles', 'Admin\ArticleController@get');
Route::get('article/{article}', 'Admin\ArticleController@edit');
Route::put('article/{article}', 'Admin\ArticleController@update');
Route::delete('article/{article}', 'Admin\ArticleController@delete');