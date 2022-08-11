<?php
/**
 * Created by PhpStorm.
 * User: HAYATE TOUBALI
 * Date: 11/19/2018
 * Time: 4:37 PM
 */

Route::prefix('suppliers')->middleware('auth:web')->group(function () {

    //Contact
    Route::resource('contacts', 'ContactController');
    //bank
    Route::resource('banks', 'BankController');

    //Supplier
    Route::get('/', 'SupplierController@suppliers')->name('Admin.suppliers');
    Route::Post('/new', 'SupplierController@supplier')->name('Admin.newSupplier');
    Route::get('/new', 'SupplierController@supplier')->name('Admin.newSupplier');
    Route::get('/{id}', 'SupplierController@Detail')->name('Admin.supplier');
    Route::get('hotels/{id}', 'SupplierController@hotels')->name('Admin.supplier.contrat.hotel');
    Route::get('packages/{id}', 'SupplierController@packages')->name('Admin.supplier.contrat.package');
    Route::get('flights/{id}', 'SupplierController@flights')->name('Admin.supplier.contrat.flight');
    Route::post('/update/{id}', 'SupplierController@update')->name('Admin.editSupplier');
    Route::get('/remove/{id}', 'SupplierController@delete')->name('Admin.deleteSupplier');

});