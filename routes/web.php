<?php
Route::get('/', 'PageController@index')->name('andro.home');

Route::prefix('/treatments')->group(function () {
	Route::get('/', 'PageController@services')->name('andro.services');
	Route::get('/{service}', 'PageController@serviceDetails')->name('andro.service.details');
});

Route::prefix('/articles')->group(function () {
	Route::get('/', 'PageController@articles')->name('andro.articles');
	Route::get('/{article}', 'PageController@articleDetails')->name('andro.article.detaiils');
});

Route::get('/gallery', 'PageController@gallery')->name('andro.gallery');

Route::get('/contact', 'ContactController@create')->name('andro.contact');
Route::get('/about', 'AboutController@index')->name('andro.about');

Auth::routes();


/*
 * Dashboard Routes
 */
Route::middleware('auth')->prefix('/dashboard')->group(function () {

	Route::view('/', 'admin.pages.index')->name('admin.home');

	Route::prefix('/services')->group(function () {
		Route::view('/', 'admin.pages.service.home')->name('admin.services');
		Route::view('/create', 'admin.pages.service.create')->name('admin.service.create');
		Route::view('/edit/{slug}', 'admin.pages.service.edit')->name('admin.service.edit');
	});

	Route::prefix('/articles')->group(function () {
		Route::view('/', 'admin.pages.articles.home')->name('admin.articles');
		Route::view('/create', 'admin.pages.articles.create')->name('admin.article.create');
		Route::view('/edit/{slug}', 'admin.pages.articles.edit')->name('admin.article.edit');
	});

	Route::prefix('/gallery')->group(function () {
		Route::view('/', 'admin.pages.gallery.home')->name('admin.gallery');
		Route::view('/create', 'admin.pages.gallery.create')->name('admin.gallery.create');
		Route::view('/edit/{id}', 'admin.pages.gallery.edit')->name('admin.gallery.edit');
	});

	Route::prefix('/appointments')->group(function() {
		Route::view('/', 'admin.pages.appointments.home')->name('admin.appointment');
	});

});
