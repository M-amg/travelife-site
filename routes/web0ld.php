<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    echo $exitCode;
    $exitCode = Artisan::call('config:clear');
    echo $exitCode;
// $exitCode = Artisan::call('config:cache');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/showPrice', 'HomeController@showPrice')->name('showPrice');
Route::post('/addNewsLetter', 'HomeController@addNewsLetter')->name('addNewsLetter');
Route::post('/callback', 'HomeController@payment')->name('payment');
Route::get('/getDestinationType', 'PackageController@getDestinationType')->name('ajax.getDestinationType');

Route::post('/notFind', function (){
    return abort(404);
})->name('notFind');

Route::get('lang/{local}', function ($local) {
    app()->setLocale($local);

    session(['local' => $local]);
    $backUrl = request()->get('backUrl');
    return redirect()->away($backUrl);
})->name('lang');

Route::get('currency/{currency}', function ($currency) {

    $Currency = \App\models\agency\TlDevise::all()->find($currency);
    session(['currency' => $Currency]);
    $backUrl = request()->get('backUrl');
    return redirect()->away($backUrl);
})->name('currency');


Route::get('devises/{devises}', function ($devise) {

    $Currency = \App\models\agency\TlDevise::all()->find($devise);
    $session = session()->put('Change', $Currency);

    return $Currency;
})->name('devises');

Auth::routes();

Route::get('manage-login', 'Auth\AgentLoginController@showLoginForm')->name('manage.login');
Route::post('manage-login', 'Auth\AgentLoginController@login')->name('manage.login');
Route::get('/getAirport', 'HomeController@getAirport')->name('getAirport');
Route::get('/getAirports', 'HomeController@getAirports')->name('getAirports');
Route::get('/getCityHotel', 'HotelController@getCities')->name('ajax.cityHotel');
Route::get('/getcity', 'HomeController@getcity')->name('ajax.city');
Route::get('/getroom', 'HomeController@getRoom')->name('ajax.room');
Route::get('/getRoomHotel', 'HotelController@getRoom')->name('ajax.room.hotel');
Route::get('/getTypeSale', 'HomeController@getTypeSale')->name('ajax.type');
Route::post('contactEmail', 'HomeController@contactEmail')->name('contact.email');

//hotel
Route::get('hotels', 'HotelController@hotels')->name('front.hotels');
Route::get('hotel/{name}', 'HotelController@hotel')->name('front.hotel');
Route::get('séjour', 'HotelController@index')->name('front.hotels.index');
Route::get('hotel', 'HotelApiController@index')->name('front.frontHotels');
Route::get('hotel-booking', 'HotelController@booking')->name('front.frontHotels.booking');
Route::post('hotel-booking', 'HotelController@booking')->name('front.frontHotels.booking');

Route::get('/hotel-info', 'HomeController@hotelInfo')->name('api.hotel.info');

//Omera
Route::get('omra/', 'OmeraController@index')->name('front.omera.index');
//packages
Route::get('package/', 'PackageController@index')->name('front.package.index');
Route::get('packages', 'PackageController@packages')->name('front.packages');
Route::get('package/{alias}', 'PackageController@package')->name('front.package');
Route::get('searchPackage/', 'PackageController@filter')->name('front.package.filter');
Route::get('searchTravel/', 'PackageController@filterTravel')->name('travel.filter');
Route::get('getLodging/', 'PackageController@getLodging')->name('front.package.getLodging');
Route::get('getLodgingFormula/', 'PackageController@getLodgingFormula')->name('front.package.getLodgingFormula');
Route::get('packages/booking', 'Customer\Book\PackageBookController@booking')->name('front.package.book');
Route::post('packages/booking', 'Customer\Book\PackageBookController@booking')->name('front.package.book');

Route::get('customer-login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
Route::post('customer-login', 'Auth\CustomerLoginController@login')->name('customer.login');
Route::post('customer-loginReservation', 'Auth\CustomerLoginController@loginReservation')->name('customer.loginReservation');
Route::get('customer-new/{token}', 'Customer\CustomerController@verify')->name('customer.verification');
Route::post('customer-new', 'Customer\CustomerController@created')->name('customer.created');
Route::post('customer-CreatedByAjax', 'Customer\CustomerController@CreatedByAjax')->name('customer.CreatedByAjax');

Route::get('getCustomerById', 'Customer\CustomerController@getCustomerById')->name('customer.getCustomerById');

//flight
Route::get('billeterie', 'FlightController@index')->name('front.flights.home');
Route::get('vols', 'FlightController@flights')->name('front.flights.list');
Route::get('displayFare', 'FlightController@flight')->name('displayFare');
Route::post('displayFare', 'FlightController@flight')->name('displayFare');
Route::post('BookingFares', 'Customer\Book\FlightBookController@Booking')->name('front.BookingFares');
Route::get('ticketBooking/{id}', 'FlightController@TicketBooking')->name('ticketBooking');
Route::get('cancelBooking/{id}', 'FlightController@cancelBooking')->name('cancelBooking');
Route::get('cancelTicket/{id}', 'FlightController@cancelTicket')->name('cancelTicket');
Route::get('GetUserConfigurationData', 'FlightController@GetUserConfigurationData');
Route::get('getPNR/{id}', 'FlightController@getPNR');

//print ticket
Route::get('ticket/{id}', 'Customer\Book\FlightBookController@ticket')->name('front.flight.ticket');


//cruise
Route::get('cruise', 'CruisesController@index')->name('front.cruises');
Route::get('cruises', 'CruisesController@cruises')->name('front.cruises.list');
//car
Route::get('cars', 'CarController@cars')->name('front.cars');

Route::get('auth/{provider}', 'Auth\CustomerLoginController@redirectToProvider')->name('auth.socialite');
Route::get('auth/{provider}/callback', 'Auth\CustomerLoginController@handleProviderCallback')->name('auth.socialite.callback');


//HotelAPI Jumbo
Route::get('/getCountries', 'HotelApiController@getCountries')->name('front.hotelApi.getCountries');
Route::get('/JB-hotels', 'HotelApiController@search')->name('api.hotels');
Route::get('/JB-hotel', 'HotelApiController@properties')->name('api.hotel');
Route::get('/hotel-getbook/{id}', 'HotelApiController@getBook')->name('api.hotel.getbook');
Route::get('/JB-hotel-2', 'HotelApiController@confirmRooms')->name('api.hotel.book');
Route::post('/JB-hotel-2', 'HotelApiController@confirmRooms')->name('api.hotel.book');
Route::post('/JB-booking', 'HotelApiController@booking')->name('api.hotel.booking');
Route::get('/hotel-book-annulation/{id}', 'HotelApiController@annulation')->name('api.hotel.annulation');
Route::get('/hotel-book-confirmer/{id}', 'HotelApiController@annulation')->name('api.hotel.endBook');

Route::get('/baskets', 'HotelController@getBaskets');
Route::get('/support', 'HomeController@branches')->name('support');
Route::get('/p', 'HomeController@page')->name('home.page');

//payment
Route::post('/package-payment', 'Customer\Book\PackageBookController@callBack');
Route::post('/vol-payment', 'Customer\Book\FlightBookController@callBack');
Route::post('/hotel-payment', 'Customer\Book\HotelBookController@callBack');
Route::post('/hotel2-payment', 'Customer\Book\HotelBookController@callBack2');
Route::post('/ok-payment', 'HomeController@okPayment');
Route::post('/backBook', 'HomeController@okPayment');
Route::post('/failUrl', 'HomeController@failUrl');


//test
Route::get('/test',function (){
    return view('welcome');
});

Route::get('/cancelBook','HomeController@cancelBook')->name('cancelBook');

//Voucher
Route::get('voucher/hotel/{id}', 'Customer\Book\HotelBookController@voucher')->name('front.hotel.EmailVoucher');
Route::get('voucher/hotelApi/{id}', 'Customer\Book\HotelBookController@voucherApi')->name('front.hotelApi.EmailVoucher');
Route::get('voucher/package/{id}', 'Customer\Book\PackageBookController@voucher')->name('front.package.EmailVoucher');

//Bill
Route::get('bill/hotel/{id}', 'Customer\Book\HotelBookController@BillHotel')->name('front.hotel.EmailBill');
Route::get('bill/hotelApi/{id}', 'Customer\Book\HotelBookController@BillHotelApi')->name('front.hotelApi.EmailBill');
Route::get('bill/package/{id}', 'Customer\Book\PackageBookController@Bill')->name('front.package.EmailBill');
Route::get('bill/flight/{id}', 'Customer\Book\FlightBookController@Bill')->name('front.flight.bill');