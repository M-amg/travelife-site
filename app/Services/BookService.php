<?php

namespace App\Services;

use App\models\book\TlCommandLine;
use App\models\book\TlPassenger;
use App\models\book\TlRule;
use App\models\bookFlightAPI\FareBook;
use App\models\bookHotelApi\ApiHotelBook;
use App\models\bookHotelApi\BookingRoomApi;
use App\models\bookHotelApi\CancelPolicyInfoApi;
use App\models\package\formula\TlFormulaBook;
use App\models\package\TlAllotmentPackage;
use App\models\package\TlTravel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class BookService {


    public static function hotel(){
        //valid book

        $command=Auth::guard("customer")->user();
        $request=Session::get("requestBook");

        $booking = new ApiHotelBook();
        $booking->hotelCode = $bookingData['hotelId'];
        $booking->hotelName = $bookingData['hotel']['name'];
        $booking->hotelAddress = $bookingData['hotel']['address'];
        $booking->longitude = '';
        $booking->latitude = '';
        $booking->starRating = $bookingData['hotel']['starRating'];
        $booking->provider = 'jumbo';
        $booking->tl_customer_id = $command["client"];
        $booking->status = 1;
        $booking->bookingId = $booking_result['bookingId'];
        $booking->checkIn = $booking_result['checkIn']; // TODO need to be converted
        $booking->checkOut = $booking_result['checkOut'];
        $booking->hotelRemarks = $booking_result['remarks'];
        $booking->price = $booking_result['price'];
        $booking->providerPrice = $booking_result['price'];
        // $booking->currencyCode = $booking_result['currencyCode'];
        $booking->reservationStatus = $booking_result['status'];
        $booking->confirmationNumber = $booking_result['confirmationNumber'];

        $booking->defaultCancelPolicy = $booking_result['defaultCancelPolicy'];

        $booking->refundableTag = $booking_result['refundableTag'];
        $booking->save();

        if ($request['p'] == 2) {

            if (Session::has('searchParameters') && Session::has('bookingData')) {
                $searchParameters = Session::get('searchParameters');
                $bookingData = Session::get('bookingData');
            } else {
                return redirect()->back();
            }

            $totalPrice = $bookingData['booking']['totalPrice'];
            // dd($bookingData);
            if (!$totalPrice) {
                return back()->withError("Couldn't get the total price!");
            }
            /*$hasEnoughBalance = BalanceService::hasEnoughBalance($agent->agence, 'hotel', $totalPrice);
            if(! $hasEnoughBalance){
                return back()->withError("Not enough balance to accomplish this operation!");
            }*/


            $hotel_id = $bookingData['hotelId'];
            $checkIn = $searchParameters['checkIn'];
            $checkOut = $searchParameters['checkOut'];
            $rooms = $request['room'];
            // dd($rooms);

            // $nationality = $searchParameters['nationality'];
            $occupancies = $bookingData['occupancies'];
            $hotelService=new HotelService();

            //  $confirmedRooms = $bookingData['confirmedRooms'];
            $booking_result = $hotelService->bookJumboRooms($hotel_id, $checkIn, $checkOut, $rooms, $occupancies, $command);

        }




        $saved = $booking->save();

        $rms = [];
        foreach ($booking_result['rooms'] as $tmp_room) {
            $room = new BookingRoomApi();
            $room->firstName = $tmp_room['firstName'];
            $room->lastName = $tmp_room['lastName'];
            $room->adultCount = $tmp_room['adultCount'];
            $room->childCount = $tmp_room['childCount'];
            $room->board = $tmp_room['board'];
            $room->roomDescription = $tmp_room['roomDescription'];
            $rms[] = $room;
        }

        $booking->rooms()->saveMany($rms);

        $cpis = [];
        foreach ($booking_result['cancellationPolicyInfos'] as $cpi) {
            $tmp_cpi = new CancelPolicyInfoApi();
            $tmp_cpi->amount = $cpi['amount'];
            $tmp_cpi->cancelTime = $cpi['cancelTime'];
            $tmp_cpi->type = $cpi['type'];
            $tmp_cpi->cancellationPolicy = $cpi['cancellationPolicy'];
            $cpis[] = $tmp_cpi;
        }
        foreach ((array)$rooms as $key => $room) {
            //dd($room);
            $confBook = new TlPassenger();
            if (isset($room["dob"]))
                $confBook->dob = Carbon::createFromFormat('d/m/Y', $room["dob"])->format('Y-m-d');
            $confBook->passport = $room["passport"] ?? $room["passport"];
            $confBook->civility = $room["Civilite"];
            $confBook->lastName = $room["lastName"];
            $confBook->firstName = $room["firstName"];
            $confBook->save();

            if (isset($room["firstNameE"])){
                if (isset($room["dobE"]))
                    $confBook->dob = Carbon::createFromFormat('d/m/Y', $room["dobE"])->format('Y-m-d');
                $confBook->passport = $room["passportE"] ?? $room["passportE"];
                $confBook->civility = $room["CiviliteE"];
                $confBook->lastName = $room["lastNameE"];
                $confBook->firstName = $room["firstNameE"];
            }

            $confBook->save();
            $confBook->attachApiHotelBook($booking->id);

        }
        $booking->cancelPoliciesInfos()->saveMany($cpis);


        $cmd=new TlCommandLine();
        $cmd->book_id = $booking->id;
        $cmd->bookName = "HotelApi";
        $cmd->type = "Hotel";
        $cmd->tl_customer_id = $command["client"];
        $cmd->save();


       return $booking;


        //email confirmed
    }

    public static function ticketPF($id)
    {
        $command = TlCommandLine::find($id);
        if (!$command) {
            return null;
        }

        $booking = FareBook::find($command->book_id);
        if (!$booking) {
            return null;
        }

        $ticket = [];
        foreach ($booking->tlPassengers as $p) {
            $p = $p->pivot;
            //  $ticket = new Ticket();
            $l["number"] = "";
            $l["created_at"] = Carbon::now();
            $l["status"] = 'booked';
            $l["type"] = $p->type;
            $l["firstName"] = $p->firstName;
            $l["lastName"] = $p->lastName;
            $l["fare_book_id"] = $booking->id;
            $ticket[] = $l;
        }

        return collect($ticket);
    }

}
