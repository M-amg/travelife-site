<?php
/**
 * Created by PhpStorm.
 * User: HAYATE TOUBALI
 * Date: 11/19/2018
 * Time: 4:38 PM
 */
Route::prefix('admin/packages')->middleware('auth:web')->group(function () {

    //Thematic
    Route::get('/thematics', 'package\ThematicController@AddThematic')->name('Admin.thematics');
    Route::resource('benefits', 'package\BenefitController');
    Route::Post('/thematic', 'package\ThematicController@AddThematic')->name('Admin.newThematic');
    Route::get('/thematic', 'package\ThematicController@AddThematic')->name('Admin.newThematic');
    Route::get('/thematic/{id}', 'package\ThematicController@editThematic')->name('Admin.thematic');
    Route::post('/thematic/{id}', 'package\ThematicController@editThematic')->name('Admin.thematic');
    Route::delete('/remove_thematic/{id}', 'package\ThematicController@deleteThematic')->name('Admin.deleteThematic');
    //Supplier
    //Route::get('/suppliers', 'package\SupplierController@AddSupplier')->name('Admin.suppliers');
    //Route::Post('/supplier', 'package\SupplierController@AddSupplier')->name('Admin.supplier');
    //Route::get('/supplier/{id}', 'package\SupplierController@AddSupplier')->name('Admin.supplier');
    //Route::post('/supplier/{id}', 'package\SupplierController@AddSupplier')->name('Admin.supplier');
    //Route::get('/remove_supplier/{id}', 'package\SupplierController@deleteSupplier')->name('Admin.deletesupplier');
    //Hotel
    //Route::get('/hotels', 'package\HotelController@AddHotels')->name('Admin.hotels');
    //Route::post('/hotel', 'package\HotelController@AddHotels')->name('Admin.hotel');
    //Route::get('/hotel/{id}', 'package\HotelController@AddHotels')->name('Admin.hotel');
    //Route::post('/hotel/{id}', 'package\HotelController@AddHotels')->name('Admin.hotel');
    //Route::get('/remove_hotel/{id}', 'package\HotelController@deleteHotel')->name('Admin.deleteHotel');
    //Route::get('/getcity', 'package\HotelController@getcity')->name('ajax.city');
    //program
    Route::resource('programs', 'package\ProgramController');
    //rule
    Route::resource('rules', 'package\RuleController');
    //detail Thematic
    Route::post('/detail/thematic', 'package\DetailController@AddThematic')->name('detail.thematic');
    //detail city
    Route::post('/detail/city', 'package\DetailController@AddCity')->name('detail.city');
    //destroy city
    Route::delete('/remove/city/{id}', 'package\DetailController@destroyCity')->name('destroy.city');
    //destroy Thematic
    Route::delete('/remove/{id}', 'package\DetailController@destroyThematic')->name('destroy.thematic');
    //detail benefit
    Route::post('/detail/benefit', 'package\DetailController@AddBenefit')->name('detail.benefit');
    //destroy benefit
    Route::delete('/remove/benefit/{id}', 'package\DetailController@destroyBenefit')->name('destroy.benefit');
    //Cancel
    Route::resource('cancellations', 'package\CancelController');
    //picture
    Route::resource('photos', 'package\PictureController');
    //supplier
    Route::resource('suppliers', 'package\SupplierController');
    //politic age
    Route::resource('politicAges', 'package\PoliticAgeController');
    //politic age
    Route::resource('stays', 'package\StayController');
    //politic age
    Route::resource('travels', 'package\TravelController');
    //Benefit Type
    Route::resource('benefitTypes', 'package\BenefitTypeController');
    //Benefit Photo
    Route::resource('benefitPhotos', 'package\BenefitPhotoController');
    Route::resource('hotelInfo', 'package\HotelPackageInfoController');

    //Package
    Route::get('/', 'package\PackageController@index')->name('Admin.packages');
    Route::Post('/new', 'package\PackageController@put')->name('Admin.newPackage');
    Route::get('/new', 'package\PackageController@put')->name('Admin.newPackage');
    Route::get('/{id}', 'package\PackageController@package')->name('Admin.package');
    Route::post('/{id}', 'package\PackageController@updatePackage')->name('Admin.updatePackage');
    /*Route::post('/lodging/{id}', 'package\PackageController@lodging')->name('Admin.lodging');
    Route::get('/lodging/{id}', 'package\PackageController@lodging')->name('Admin.lodging');
    //destroy package*/
    Route::delete('/removePackage/{id}', 'package\PackageController@destroyPackage')->name('Admin.destroyPackage');

});
