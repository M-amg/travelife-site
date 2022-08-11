<?php

Route::prefix('manage')->middleware('auth:agent')->group(function () {
    Route::get('/', 'AgencyController@index')->name('manage.home');
    Route::post('/logout', 'AgencyController@logout')->name('manage.logout');
    //flight
    Route::get('/flight', 'AgencyController@flight')->name('manage.flight');
    Route::get('/flights', 'flight\FlightController@flights')->name('manage.flights');
    Route::post('/flight-display', 'flight\FlightController@fareDisplay')->name('manage.displayFare');
    Route::post('/BookingFares', 'flight\FlightController@Booking')->name('BookingFares');
    Route::get('getTerms', 'flight\InformationController@getTermsAndConditions')->name('terms');

    Route::get('/ticketBooking/{id}', 'flight\FlightController@TicketBooking')->name('manage.flight.ticketBooking');
    Route::get('/cancelBooking/{id}', 'flight\FlightController@cancelBooking')->name('manage.flight.cancelBooking');
    Route::get('/cancelTicket/{id}', 'flight\FlightController@cancelTicket')->name('manage.flight.cancelTicket');
    Route::get('/GetUserConfigurationData', 'flight\FlightController@GetUserConfigurationData');
    Route::get('/getPNR/{id}', 'flight\FlightController@getPNR');
    //local
    Route::get('/getBook/{id}', 'flight\FlightController@getBook');
    //package
    Route::get('/package', 'AgencyController@package')->name('manage.package');
    Route::get('/packages', 'AgencyController@packages')->name('manage.packages');
    Route::get('package/{alias}', 'AgencyController@detailPackage')->name('manage.detailPackage');

    Route::prefix('customer')->namespace('customer')->group(function () {
        include 'manageCustomer.php';
    });

    Route::prefix('booking')->namespace('booking')->group(function () {
        include 'manageBooking.php';
    });

    Route::prefix('hotel')->namespace('hotel')->group(function () {
        include 'manageHotel.php';
    });

    Route::prefix('devis')->namespace('devis')->group(function () {
        include 'manageDevis.php';
    });

//My Cancel
    Route::get('cancelMeBook', 'flight\FlightController@cancelMeBook')->name('front.cancelMeBook');
    Route::get('devis', 'devis\DevisLineController@index')->name('manage.addDevis');
    Route::post('devis', 'devis\DevisLineController@devis')->name('manage.Devis');


    Route::resource('facture-formula', 'package\BillFormulaController');
    Route::resource('facture-hotel', 'hotel\BillHotelController');
    Route::resource('rules-formula', 'package\rule\RulesFormulaController');
    Route::post('rules-hotel', 'hotel\rule\RulesHotelController@hotel')->name('rules-hotel');
    Route::post('rules-hotelApi', 'hotel\rule\RulesHotelController@hotelApi')->name('rules-hotelApi');

    Route::resource('facture-flight', 'flight\BillFlightController');
    Route::resource('rules-flight', 'flight\rule\RulesFlightController');

    //Package
    Route::get('package-travel', 'package\PackageController@listTravels')->name('manage.package.travels');
    Route::post('packages/confirmBooking', 'package\PackageController@confirmBooking')->name('manage.package.confirmBooking');
    Route::get('packages/booking', 'package\PackageController@booking')->name('manage.package.book');
    Route::post('packages/booking', 'package\PackageController@booking')->name('manage.package.book');

    Route::resource('rules-flight', 'flight\rule\RulesFlightController');
    Route::resource('rules-supplier', 'supplier\RulesSupplierController');

    Route::resource('supplier', 'supplier\InvoicesController');
    Route::get('Invoices-print', 'supplier\InvoicesController@print')->name('invoice.print');
    Route::resource('invoiceLine', 'supplier\InvoiceLineController');


});