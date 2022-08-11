<?php
//customer
Route::resource('customer', 'CustomerController');
Route::resource('customerCompany', 'CustomerCompanyController');
Route::get('/search', 'CustomerController@search')->name('customer.search');
Route::get('/searchAlert', 'CustomerController@searchAlert')->name('customer.searchAlert');
Route::get('/filter', 'CustomerController@filter')->name('customer.filter');
Route::get('/filterAlert', 'CustomerController@filterAlert')->name('customer.filterAlert');
Route::get('/checked/{checked}', 'CustomerController@checked')->name('customer.checked');
Route::post('/addObservation', 'CustomerController@addObservation')->name('customer.addObservation');
Route::post('/editObservation/{id}', 'CustomerController@editObservation')->name('customer.editObservation');
Route::get('/showObservation/{id}', 'CustomerController@showObservation')->name('customer.showObservation');
Route::delete('/deleteObservation/{id}', 'CustomerController@deleteObservation')->name('customer.deleteObservation');
Route::post('/addKeyword', 'CustomerController@addKeyword')->name('customer.addKeyword');
Route::post('/attachedPiece', 'CustomerController@attachedPiece')->name('customer.attachedPiece');
Route::delete('/destroyAttachedPieces/{id}', 'CustomerController@destroyAttachedPieces')->name('customer.destroyAttachedPieces');
Route::get('/autocomplete', 'CustomerController@autocomplete')->name('customer.autocomplete');
Route::get('/interdit/{interdit}', 'CustomerController@interdit')->name('customer.interdit');
Route::get('/activer/{activer}', 'CustomerController@activer')->name('customer.activer');


?>