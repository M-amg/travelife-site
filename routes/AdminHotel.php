<?php

//Cancel
Route::resource('cancels', 'CancelController');
//Hotel Option
Route::resource('options', 'HotelOptionController');
//promo
Route::resource('promos', 'PromoController');
//Room Service
Route::resource('services', 'RoomServiceController');
//Room allotements
Route::resource('allotment', 'AllotmentController');


//pictures
Route::resource('pictures-hotel', 'PictureController');
//Hotel services
Route::resource('serviceHotels', 'ServiceController');
// Contrat
Route::resource('contrats', 'ContratController');
// BookingManager
Route::resource('managers', 'ManagerController');
//Age Enfant
Route::resource('ageEnfants', 'AgeController');
//Info
Route::resource('infos', 'InfoController');

Route::resource('saisons', 'SaisonController');
Route::resource('supplements', 'SupplementController');
Route::resource('countries', 'CountryController');
Route::resource('cities', 'CityController');
Route::resource('payment', 'PaymentController');

//Hotel
Route::get('/', 'HotelController@hotels')->name('Admin.hotels');
Route::Post('/new', 'HotelController@hotel')->name('Admin.newHotel');
Route::get('/new', 'HotelController@hotel')->name('Admin.newHotel');
Route::get('/getHotelBayName', 'HotelController@getHotelBayName')->name('Admin.getHotelBayName');
Route::get('/{id}', 'HotelController@Detail')->name('Admin.hotel');
Route::delete('/remove/{id}', 'HotelController@destroy')->name('Admin.hotelDestroy');
Route::delete('/roomDestroy/{id}', 'HotelController@roomDestroy')->name('Admin.roomDestroy');
Route::post('/update/{id}', 'HotelController@update')->name('Admin.updateHotel');

//Room
Route::get('/rooms', 'RoomController@index')->name('Admin.rooms');
Route::get('/rooms/rateEdit', 'RoomController@getRate')->name('Admin.room.getRate');
Route::get('/roomForm/{id}', 'RoomController@RoomType')->name('Admin.newRoomForm');
Route::Post('/room', 'RoomController@RoomType')->name('Admin.newRoom');
Route::get('/room/{id}', 'RoomController@Detail')->name('Admin.room');
Route::post('/room/{id}', 'RoomController@update')->name('room.update');
//Add Services to room
Route::post('/roomServices', 'RoomController@addServeces')->name('room.addServeces');
//remove Services to room
Route::post('/removeServeces/{id}', 'RoomController@removeServeces')->name('room.removeServeces');
//Rate
Route::post('/Rate/{id}', 'RoomController@RateMethod')->name('Admin.room.rate');
Route::post('/rateEdit/{id}', 'RoomController@RateMethod')->name('Admin.room.rateEdit');




