<?php
/**
 * Created by PhpStorm.
 * User: HAYATE TOUBALI
 * Date: 11/19/2018
 * Time: 4:37 PM
 */
Route::prefix('admin')->middleware('auth:web')->group(function () {

    Route::get('/', 'AdminController@index')->name('Admin');
    Route::prefix('hotels')->namespace('hotel')->group(function () {
        include 'AdminHotel.php';
    });
    Route::prefix('agency')->namespace('agency')->group(function () {
        include 'AgencyAdmin.php';
    });
    Route::prefix('page')->namespace('page')->group(function () {
        include 'adminPage.php';
    });
    Route::prefix('flight')->namespace('flight')->group(function () {
        include 'adminFlight.php';
    });
    Route::prefix('lodging')->namespace('lodging')->group(function () {
        include 'adminLoding.php';
    });

    Route::prefix('customer')->namespace('customer')->group(function () {
        include 'adminCustomer.php';
    });
    Route::prefix('activite')->namespace('activite')->group(function () {
        include 'adminActivite.php';
    });

  
    //books admin
    Route::get('/books', 'book\BookController@books')->name('admin.books');
    Route::get('/bills', 'book\BookController@bills')->name('admin.bills');
    Route::get('/book/{id}', 'book\BookController@tlFormulaBook')->name('admin.book.TlFormulaBook');
    Route::get('/bookHotelApi/{id}', 'book\BookController@HotelApiBook')->name('admin.book.HotelApi');
    Route::get('/bookHotel/{id}', 'book\BookController@HotelBook')->name('admin.book.TlBookHotel');
    Route::get('/bookDevis/{id}', 'book\BookController@tlDevis')->name('admin.book.TlDevis');
    Route::get('/book-flight/{id}', 'book\BookController@getFareBook')->name('admin.book.flight');
    Route::get('/book-validation/{id}', 'book\BookController@validateBook')->name('admin.book.FlightAPI');
    Route::delete('/book/{id}', 'book\BookController@destroyBook')->name('admin.book.destroyBook');

    //PDF
    Route::get('/book-pdf/{id}', 'book\BookController@bookPdf')->name('admin.book.pdf');
    Route::get('/book-voucher/{id}', 'book\BookController@bookvoucher')->name('admin.book.voucher');
    Route::get('/book-validate/{id}', 'book\BookController@validateBook')->name('admin.book.validate');

    Route::get('/hotel-bill/{id}', 'book\BookController@hotelBill')->name('admin.book.hotelPDF');
    Route::get('/hotel-voucher/{id}', 'book\BookController@hotelVoucher')->name('admin.hotelVoucher');
    Route::get('/hotel-validate/{id}', 'book\BookController@hotelValidate')->name('admin.book.hotelValidate');


    //rule
    Route::resource('rule-book', 'book\RuleController');
    Route::post('rule-validated/{id}', 'book\RuleController@validated')->name('rule.validated');
    //Cancel Book
    Route::resource('cancelBooks', 'book\CancelBookController');
    //facture
    Route::resource('admin-facture-formula', 'book\BillFormulaController');
    Route::resource('admin-facture-flight', 'book\BillFlightController');
    Route::resource('admin-facture-devis', 'book\BillDevisController');
    Route::resource('admin-facture-Hotel', 'book\BillHotelController');
    Route::resource('admin-facture-HotelApi', 'book\BillHotelController');

    //rooming list
    Route::post('volList', 'book\BookController@volList')->name('admin.volList');
    Route::post('roomingList', 'book\BookController@roomingList')->name('admin.roomingList');
//Markup
    Route::resource('marks', 'config\MarkController');
    Route::resource('fees', 'config\FeesController');

    //Bill
    Route::get('/hotel-bill/{id}',function (){return back();})->name('admin.hotel.bill');
    Route::get('/flight-bill/{id}',function (){return back();})->name('admin.flight.bill');
    Route::get('/hotelApi-bill/{id}',function (){return back();})->name('admin.hotelApi.bill');
    Route::get('/package-bill/{id}',function (){return back();})->name('admin.package.bill');
    Route::get('/devis-bill/{id}',function (){return back();})->name('admin.devis.bill');


});
