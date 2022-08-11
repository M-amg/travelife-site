<?php
//customer
Route::resource('adminCustomer', 'CustomerController');
Route::resource('adminCustomerCompany', 'CustomerCompanyController');
Route::resource('adminSolde', 'SoldeController');
Route::resource('adminAccountCompany', 'AccountCompanyController');
Route::get('/', 'CustomerController@showNewsLetter')->name('adminCustomer.showNewsLetter');
?>