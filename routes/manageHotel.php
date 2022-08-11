<?php
Route::resource('hotel', 'HotelController');

Route::post('hotel-booking', 'HotelController@booking')->name('manage.frontHotels.booking');
Route::post('hotel/confirmBooking', 'HotelController@confirmBooking')->name('manage.hotel.confirmBooking');
Route::get('book/hotel/{id}','HotelController@getHotelBook')->name('manage.book.hotel');
//HotelAPI Jumbo
Route::get('/list', 'HotelApiController@search')->name('manage.api.hotels');
Route::get('/detail', 'HotelApiController@properties')->name('manage.api.hotel');
Route::get('/cancelBookingHotel/{id}', 'HotelBookController@cancelBooking')->name('manage.api.hotel.cancelBooking');
Route::post('/booking', 'HotelApiController@booking')->name('manage.api.hotel.booking');
Route::post('/book', 'HotelBookController@bookRooms')->name('manage.api.hotel.book');
Route::get('/book/api/{id}','HotelBookController@showBooking')->name('showBooking');
Route::get('/{name}', 'HotelController@hotel')->name('manage.hotel');
Route::get('hotel-check', 'HotelController@check')->name('manage.hotel.check');

?>