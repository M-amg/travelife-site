<?php
//booking
Route::resource('bill', 'BillController');
Route::resource('rule', 'RuleController');
Route::resource('booking', 'BookingController');
Route::get('flight/{id}','FlightATSBookController@getFareBook')->name('manage.book.flight');
Route::get('/ticketDownload/{id}', 'FlightATSBookController@TicketDownload')->name('manage.flight.ticketDownload');
Route::get('formula/{id}','BookingPackageController@getFormulaBook')->name('manage.book.formula');
Route::post('book/cancel/{id}', 'BookingPackageController@cancel')->name('manage.package.cancel');

//Voucher
Route::get('voucher/hotel/{id}', 'BookingController@voucher')->name('manage.hotel.voucher');
Route::get('voucher/hotelApi/{id}', 'BookingController@voucherApi')->name('manage.hotelApi.voucher');
Route::get('voucher/package/{id}', 'BookingController@voucherPackage')->name('manage.package.voucher');

//Bill
Route::get('bill/hotel/{id}', 'BookingController@BillHotel')->name('manage.hotel.bill');
Route::get('bill/hotelApi/{id}', 'BookingController@BillHotelApi')->name('manage.hotelApi.bill');
Route::get('bill/package/{id}', 'BookingController@BillPackage')->name('manage.package.bill');
Route::get('bill/devis/{id}', 'BookingController@BillDevis')->name('manage.devis.bill');
Route::get('bill/flight/{id}', 'BookingController@BillFlight')->name('manage.flight.bill');

?>