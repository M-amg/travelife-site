<?php
/**
 * Created by PhpStorm.
 * User: HAYATE TOUBALI
 * Date: 11/19/2018
 * Time: 4:37 PM
 */


Route::post('packages/confirmBooking', 'Book\PackageBookController@confirmBooking')->name('front.package.confirmBooking');
Route::post('hotelBook/confirmBooking', 'Book\HotelBookController@confirmBooking')->name('front.hotel.confirmBooking');

Route::prefix('customer')->middleware('auth:customer')->group(function () {
    Route::get('/', 'CustomerController@index')->name('customer.home');
    //PDF
    Route::get('/book-pdf/{id}', 'Book\PackageBookController@bookPdf')->name('customer.pdf.book');
    Route::get('/book-hotel-pdf/{id}', 'Book\HotelBookController@bookHotelPdf')->name('customer.pdf.book.hotel');
    Route::get('/book-hotelApi-pdf/{id}', 'Book\HotelBookController@bookHotelApiPdf')->name('customer.pdf.book.hotelApi');
    Route::get('/book-flight-pdf/{id}', 'Book\FlightBookController@bookFlightPdf')->name('customer.pdf.book.flight');
    Route::get('reservations-list', 'CustomerController@reservationList')->name('customer.reservationList');

    //BookDetail
    Route::get('book/package/{id}', 'Book\PackageBookController@tlFormulaBook')->name('front.package.bookDetail');


    //paymentView
    Route::get('book/paymentView', 'Book\PackageBookController@paymentView')->name('front.package.paymentView');


    Route::get('book/flight/{id}', 'Book\FlightBookController@getFareBook')->name('front.flight.bookDetail');
    Route::get('book/hotel/{id}', 'Book\HotelBookController@hotel')->name('front.hotel.bookDetail');
    Route::get('book/hotelWord/{id}', 'Book\HotelBookController@hotelWord')->name('front.hotelWord.bookDetail');

    Route::get('book/cancel/{id}', 'Book\PackageBookController@cancel')->name('front.package.cancel');
    Route::post('customer-update/{id}', 'CustomerController@updated')->name('customer.updated');
    
    //Flight book
    Route::get('/cancelBooking/{id}', 'Book\FlightBookController@cancelBooking')->name('front.cancelBooking');


    //payment
    Route::get('payment/package/{id}', 'Book\PackageBookController@payment2')->name('front.package.payment');
    Route::get('payment/flight/{id}', 'Book\FlightBookController@payment2')->name('front.flight.payment');
    Route::get('payment/hotel/{id}', 'Book\HotelBookController@payment2')->name('front.hotel.payment');
    Route::get('payment/hotelWord/{id}', 'Book\HotelBookController@paymentApi2')->name('front.hotelWord.payment');

    //Ticket
    Route::get('flight/ticketBooking/{id}', 'Book\FlightBookController@TicketBooking')->name('flight.ticketBooking');
    Route::get('flight/cancelBooking/{id}', 'Book\FlightBookController@cancelBooking')->name('flight.cancelBooking');
    Route::get('flight/ticket/{id}', 'Book\FlightBookController@downloadTicket')->name('flight.ticket');
    Route::get('flight/cancelTicket/{id}', 'Book\FlightBookController@cancelTicket')->name('flight.cancelTicket');

    Route::get('logout-customer', 'CustomerController@logout')->name('customer.logout');

    //Voucher
    Route::get('voucher/hotel/{id}', 'Book\HotelBookController@voucher')->name('front.hotel.voucher');
    Route::get('voucher/hotelApi/{id}', 'Book\HotelBookController@voucherApi')->name('front.hotelApi.voucher');
    Route::get('voucher/package/{id}', 'Book\PackageBookController@voucher')->name('front.package.voucher');

    //Bill
    Route::get('bill/hotel/{id}', 'Book\HotelBookController@BillHotel')->name('front.hotel.bill');
    Route::get('bill/hotelApi/{id}', 'Book\HotelBookController@BillHotelApi')->name('front.hotelApi.bill');
    Route::get('bill/package/{id}', 'Book\PackageBookController@Bill')->name('front.package.bill');

});
