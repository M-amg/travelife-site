<?php
//lag
Route::resource('lag', 'LagController');
//segment
Route::resource('segment', 'SegmentController');
//segment
Route::resource('policiesAge', 'PoliciesAgeController');
//carrier
Route::resource('carriers', 'CarrierController');
//flight
Route::get('/promo', 'FlightPromoController@index')->name('flightPromo.flights');
Route::post('/promo', 'FlightPromoController@newFlight')->name('flightPromo.new');
Route::get('/promo/{id}', 'FlightPromoController@flight')->name('flightPromo.flight');
Route::post('/promo/{id}', 'FlightPromoController@updateFlight')->name('flightPromo.update');
Route::post('/removePromo/{id}', 'FlightPromoController@removeFlight')->name('flightPromo.Destroy');

Route::post('/promo-lag', 'FlightPromoController@newFlightLag')->name('flightPromoLag.new');
Route::post('/promo-lag/{id}', 'FlightPromoController@updateFlightLag')->name('flightPromoLag.update');
Route::post('/removePromo-lag/{id}', 'FlightPromoController@removeFlightLag')->name('flightPromoLag.Destroy');

Route::get('/', 'FlightController@flights')->name('flight.flights');
Route::Post('/new', 'FlightController@flight')->name('flight.newFlight');
Route::get('/new', 'FlightController@flight')->name('flight.newHotel');
Route::get('/{id}', 'FlightController@Detail')->name('flight.flight');
Route::delete('/remove/{id}', 'FlightController@destroy')->name('flight.flightDestroy');
Route::post('/update/{id}', 'FlightController@update')->name('flight.updateFlight');


?>
