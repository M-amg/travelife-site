<?php


namespace App\Adapters;

use App\BookHotel;
use App\BookHotelChamber;
use App\Client;
use App\Exceptions\HotelApiException;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\NuiteeAttribute;
use App\Models\Hotel\NuiteeHotel;
use App\Models\Hotel\NuiteeImage;
use App\Services\UtilityService;
use DateTime;
use Dompdf\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use App\Providers\Nuitee;

class NuiteeAdapter implements HotelProviderInterface
{

    private $login;
    private $timeout;

    public function __construct()
    {
        $this->login = new Nuitee\login;
        $this->login->setUserName(config('services.nuitee.username'));
        $this->login->setPassword(config('services.nuitee.password'));
        $this->login->setLanguage('FR');
        //TODO set the lanuage depending on the user

        $this->timeout = 90000;
    }

    public function getHotels(\DateTime $checkIn, \DateTime $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode, $sessionId = null)
    {
        $roomGuestsList = [];
        foreach ($guestRooms as $guestRoom) {
            $roomGuest = new Nuitee\roomGuest();
            $roomGuest->setAdultCount($guestRoom['adults']);
            $roomGuest->setChildCount($guestRoom['children']);
            if ($guestRoom['children'] > 0) {
                $roomGuest->setChildAges($guestRoom['childrenAges']);
            }

            $roomGuestsList[] = $roomGuest;
        }

        $roomGuests = new Nuitee\roomGuests;
        $roomGuests->setRoomGuests($roomGuestsList);

        $cityAvailabilityReq = new Nuitee\getCityAvailabilityReq($this->login, $sessionId, $checkIn->format('Y-m-d'), $checkOut->format('Y-m-d'), $cityCode, $hotelCodes, $guestNationality, $roomGuests, $currency, $languageCode, $this->timeout);

        $cityAvailabilityParameters = new Nuitee\performGetCityAvailability;
        $cityAvailabilityParameters->setGetCityAvailabilityReq($cityAvailabilityReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        $response = $nuitee->performGetCityAvailability($cityAvailabilityParameters);

        try {
            $statusCode = $response->getGetCityAvailabilityRes()->getResponseStatus()->getStatusCode();
        } catch (Exception $ex) {
            $ex->report();
            throw new HotelApiException();
        }
        if ($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }


        // $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        // Storage::disk('local')->put("xml/nuitee/".$generated_date."_getCityAvailability_response.xml", $nuitee->__getlastresponse());
        // Storage::disk('local')->put("xml/nuitee/".$generated_date."_getCityAvailability_request.xml", $nuitee->__getlastrequest());

        Session::put('sessionId', $response->getGetCityAvailabilityRes()->getSessionId());

        $hotels = [];
        foreach ($response->getGetCityAvailabilityRes()->getHotelResults()->getHotelResults() as $hotel) {
            $url = $hotel->getHotelInfo()->getHotelPictureUrl();
            $fileName = basename($url);
            $fileNameParts = explode('.', $fileName);
            $newFileName = substr_replace($fileNameParts[0], 'b', -1);
            $url = str_replace($fileNameParts[0], $newFileName, $url);

            $hotel_tmp['pictureUrl'] = $url;
            $hotel_tmp['hotelName'] = $hotel->getHotelInfo()->getHotelName();
            $hotel_tmp['address'] = $hotel->getHotelInfo()->getHotelAddress();
            $hotel_tmp['description'] = $hotel->getHotelInfo()->getHotelDescription();
            $hotel_tmp['code'] = $hotel->getHotelInfo()->getHotelCode();
            $hotel_tmp['starRating'] = $hotel->getHotelInfo()->getStarRating();
            $hotel_tmp['provider'] = 'nuitee';
            $hotel_tmp['providerId'] = 1;

            $hotelRates_tmp = [];
            $minRate = floatval($hotel->getRateDetails()->getMinRate());
            $hotelRates_tmp['minRate'] = ceil(UtilityService::addPercentage($minRate, 'nuitee'));
            $hotelRates_tmp['maxRate'] = $hotel->getRateDetails()->getMaxRate();
            $hotelRates_tmp['currency'] = $response->getGetCityAvailabilityRes()->getCurrency();
            $hotel_tmp['hotelRates'] = $hotelRates_tmp;

            $hotel_tmp['route'] = route('nuitee.hotel', ['code' => $hotel_tmp['code']]);

            $hotels[] = $hotel_tmp;
        }

        return $hotels;
    }

    public function getRooms($hotel_id, \DateTime $checkIn, \DateTime $checkOut, $guestRooms, $sessionId)
    {
        $getPropertyAvialabilityReq = new Nuitee\getPropertyAvailabilityReq($sessionId, $hotel_id, $this->timeout);

        $performGetPropertyAvailability = new Nuitee\performGetPropertyAvailability;
        $performGetPropertyAvailability->setGetPropertyAvailabilityReq($getPropertyAvialabilityReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        $response = $nuitee->performGetPropertyAvailability($performGetPropertyAvailability);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_getPropertyAvailability_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_getPropertyAvailability_response.xml", $nuitee->__getlastresponse());

        Session::put('sessionId', $response->getGetPropertyAvailabilityRes()->getSessionId());

        $hotel = array();
        $hotel['name'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getHotelName();
        $hotel['code'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getHotelCode();
        $hotel['address'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getHotelAddress();
        $hotel['city'] = $response->getGetPropertyAvailabilityRes()->getCity()->getCityName();
        $hotel['country'] = $response->getGetPropertyAvailabilityRes()->getCity()->getCountryName();
        $hotel['starRating'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getStarRating();
        $hotel['longitude'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getLongitude();
        $hotel['latitude'] = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getLatitude();
        $hotel['checkIn'] = $response->getGetPropertyAvailabilityRes()->getCheckInDate();
        $hotel['checkOut'] = $response->getGetPropertyAvailabilityRes()->getCheckOutDate();

        $hotel['currency'] = $response->getGetPropertyAvailabilityRes()->getCurrency();


        // getting big hotel image
        $url = $response->getGetPropertyAvailabilityRes()->getHotelInfo()->getHotelPictureUrl();
        $fileName = basename($url);
        $fileNameParts = explode('.', $fileName);
        $newFileName = substr_replace($fileNameParts[0], 'b', -1);
        $url = str_replace($fileNameParts[0], $newFileName, $url);

        $hotel['pictureUrl'] = $url;

        $hotel['rates'] = [];
        $hotel['rooms'] = [];
        foreach ($response->getGetPropertyAvailabilityRes()->getRateDetails()->getRateDetails() as $rate) {
            $tmp_rate = [];

            $tmp_rate['totalPrice'] = ceil(UtilityService::addPercentage($rate->getTotalPrice(), 'nuitee'));
            $tmp_rate['rateCode'] = $rate->getRateDetailCode();
            $tmp_rate['cancelPolicies'] = [];
            $tmp_rate['refund'] = $rate->getCancelPoliciesInfos()->getRefundableTag();

            $policies = $rate->getCancelPoliciesInfos()->getCancelPolicyInfos();
            foreach ((array)$policies as $policy) {
                $tmp_policy = [];
                $tmp_policy['amount'] = $policy->getAmount();
                $tmp_policy['cancelTime'] = $policy->getCancelTime();
                $tmp_policy['cancellationPolicy'] = $policy->getCancellationPolicy();
                $tmp_policy['type'] = $policy->getType();
                $tmp_rate['cancelPolicies'][] = $tmp_policy;
            }

            $tmp_rate['rooms'] = [];
            foreach ((array)$rate->getRooms()->getRooms() as $room) {
                $tmp_room = [];

                $tmp_room['roomCode'] = $room->getRoomCode();
                $tmp_room['adults'] = $room->getAdultCount();
                $tmp_room['children'] = $room->getChildCount();
                $tmp_room['price'] = $room->getRoomRate()->getPrice();
                $tmp_room['description'] = $room->getRoomDescription();

                $tmp_room['includedBoard']['description'] = $room->getIncludedBoard()->getBoardDescription();
                $tmp_room['includedBoard']['boardId'] = $room->getIncludedBoard()->getBoardId();
                $tmp_room['includedBoard']['price'] = $room->getIncludedBoard()->getPrice();

                if ($room->getBoards()->getBoards()) {
                    $tmp_room['boards'] = [];
                    foreach ($room->getBoards()->getBoards() as $board) {
                        $tmp_board = [];

                        $tmp_board['price'] = $board->getPrice();
                        $tmp_board['description'] = $board->getBoardDescription();
                        $tmp_board['id'] = $board->getBoardId();

                        $tmp_room['boards'][] = $tmp_board;
                    }
                }

                $tmp_rate['rooms'][] = $tmp_room;

                // adding rate cancel conditions into room
                // $tmp_room['cancelConditions']['refundable'] = $rate->getCancelPoliciesInfos()->getRefundableTag();
                // $tmp_room['cancelConditions']['cancelPolicies'] = $rate->getCancelPoliciesInfos()->getCancellationPolicies();
                // $tmp_room['cancelConditions']['defaultPolicy'] = $rate->getCancelPoliciesInfos()->getDefaultPolicy();
                // $tmp_room['cancelConditions']['hotelRemarks'] = $rate->getCancelPoliciesInfos()->getHotelRemarks();
                // $tmp_room['rateCode'] = $rate->getRateDetailCode();

                // $tmp_room['cancelConditions']['cancelPoliciesInfos'] = [];
                // foreach($rate->getCancelPoliciesInfos()->getCancelPolicyInfos() as $cancelPolicyInfo){
                //     $tmp_policyInfo = [];
                //     $tmp_policyInfo['amount'] = $cancelPolicyInfo->getAmount();
                //     $tmp_policyInfo['cancellationPolicy'] = $cancelPolicyInfo->getCancellationPolicy();
                //     $tmp_policyInfo['cancelTime'] = $cancelPolicyInfo->getCancelTime();
                //     $tmp_policyInfo['type'] = $cancelPolicyInfo->getType();

                //     $tmp_room['cancelConditions']['cancelPoliciesInfos'][] = $tmp_policyInfo;
                // }


                // if(!isset($hotel['rooms'][$room->getRoomDescription()])){
                //     $hotel['rooms'][$room->getRoomDescription()] = [];
                // }
                // $hotel['rooms'][$room->getRoomDescription()]['description'] = $tmp_room['description'];
                // $hotel['rooms'][$room->getRoomDescription()]['rates'][] = $tmp_room;
            }


            $hotel['rates'][] = $tmp_rate;
        }

        return $hotel;
    }

    public function getHotel($hotelCode)
    {
        $sessionId = null;
        $getHotelInfoReq = new Nuitee\getHotelInfoReq($sessionId, $this->login, $hotelCode);

        $performGetHotelInfo = new Nuitee\performGetHotelInfo;
        $performGetHotelInfo->setGetHotelInfoReq($getHotelInfoReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        $response = $nuitee->performGetHotelInfo($performGetHotelInfo);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_getGetHotelInfo_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_getGetHotelInfo_response.xml", $nuitee->__getlastresponse());

        try {
            $statusCode = $response->getGetHotelInfoRes()->getResponseStatus()->getStatusCode();
        } catch (Exception $ex) {
            $ex->report();
            throw new HotelApiException();
        }
        if ($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }

        $result = $response->getGetHotelInfoRes();

        // check if hotel exists in main database
        $nuiteeHotel = NuiteeHotel::find($result->getHotelId());
        if (!$nuiteeHotel) {
            $nuiteeHotel = new NuiteeHotel;
        }

        if ($nuiteeHotel->hotel_id) {
            $hotel = Hotel::find($nuiteeHotel->hotel_id);
        } else {
            $info = [
                'name' => $result->getName(),
                'city' => $result->getCity(),
                'country' => $result->getCountry(),
            ];
            $hotel = $this->findHotelByInfo($info);
        }

        $nuiteeHotel = $this->mapToNuiteeHotel($result, $nuiteeHotel);
        $hotel = $this->updateHotel($hotel, $nuiteeHotel);
        $hotel->save();
        $something = $hotel->nuiteeHotels()->save($nuiteeHotel);
        $nuiteeHotel->touch();
        $this::assignImages($result, $nuiteeHotel);
        $this::assignAttributes($result, $nuiteeHotel);

        return $nuiteeHotel;
    }

    public function confirmRooms($rooms, $checkIn, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId)
    {
        $crs = [];
        foreach ($rooms as $cr) {
            $confirmedRoom = new Nuitee\confirmedRoom;
            $confirmedRoom->setRoomCode($cr['roomCode']);
            $confirmedRoom->setBoardId($cr['boardId']);

            $crs[] = $confirmedRoom;
        }
        $confirmedRooms = new Nuitee\confirmedRooms;
        $confirmedRooms->setConfirmedRooms($crs);

        $confirmPropertyAvailabilityReq = new Nuitee\confirmPropertyAvailabilityReq($sessionId, $hotelCode, $rateDetailCode, $confirmedRooms, $this->timeout);

        $performConfirmPropertyAvailability = new Nuitee\performConfirmPropertyAvailability;
        $performConfirmPropertyAvailability->setConfirmPropertyAvailabilityReq($confirmPropertyAvailabilityReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        $response = $nuitee->performConfirmPropertyAvailability($performConfirmPropertyAvailability);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_ConfirmPropertyAvailability_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/" . $generated_date . "_ConfirmPropertyAvailability_response.xml", $nuitee->__getlastresponse());

        Session::put('sessionId', $response->getConfirmPropertyAvailabilityRes()->getSessionId());

        $hotel = [];
        $hotel['code'] = $response->getConfirmPropertyAvailabilityRes()->getHotelInfo()->getHotelCode();
        $hotel['name'] = $response->getConfirmPropertyAvailabilityRes()->getHotelInfo()->getHotelName();
        $hotel['address'] = $response->getConfirmPropertyAvailabilityRes()->getHotelInfo()->getHotelAddress();
        $hotel['city'] = $response->getConfirmPropertyAvailabilityRes()->getCity()->getCityName();
        $hotel['country'] = $response->getConfirmPropertyAvailabilityRes()->getCity()->getCountryName();
        $hotel['pictureUrl'] = $response->getConfirmPropertyAvailabilityRes()->getHotelInfo()->getHotelPictureUrl();
        $hotel['starRating'] = $response->getConfirmPropertyAvailabilityRes()->getHotelInfo()->getStarRating();
        $hotel['provider'] = 'nuitee';

        $booking = [];

        $booking['currency'] = $response->getConfirmPropertyAvailabilityRes()->getCurrency();
        $booking['checkIn'] = $response->getConfirmPropertyAvailabilityRes()->getCheckInDate();
        $booking['checkOut'] = $response->getConfirmPropertyAvailabilityRes()->getCheckOutDate();
        $totalPrice = $response->getConfirmPropertyAvailabilityRes()->getRoomAvailability()->getTotalPrice();
        $booking['totalPrice'] = ceil(UtilityService::addPercentage(floatval($totalPrice), 'nuitee'));
        $booking['priceChanged'] = $response->getConfirmPropertyAvailabilityRes()->getRoomAvailability()->getPriceChanged();

        $booking['confirmedBooking'] = $response->getConfirmPropertyAvailabilityRes()->getAvailableForConfirmedBooking();
        $booking['reservedBooking'] = $response->getConfirmPropertyAvailabilityRes()->getAvailableForReservedBooking();

        $booking['confirmedPropertyCode'] = $response->getConfirmPropertyAvailabilityRes()->getConfirmPropertyCode();
        $booking['remarks'] = $response->getConfirmPropertyAvailabilityRes()->getRemarks();

        $rooms = [];
        foreach ($response->getConfirmPropertyAvailabilityRes()->getRoomAvailability()->getRooms()->getRooms() as $key => $room) {
            $tmp_room = [];

            $tmp_room['code'] = $room->getRoomCode();
            $tmp_room['price'] = UtilityService::addPercentage(floatval($room->getRoomRate()->getPrice()), 'nuitee');
            $tmp_room['description'] = $room->getRoomDescription();
            $tmp_room['typeCode'] = '';
            $tmp_room['adults'] = $room->getAdultCount();
            $tmp_room['children'] = $room->getChildCount();

            $rooms[] = $tmp_room;
        }

        Session([
            'confirmedRooms' => $rooms,
            'totalPrice' => $booking['totalPrice']
        ]);

        return [
            'hotel' => $hotel,
            'booking' => $booking,
            'rooms' => $rooms
        ];

    }

    public function bookRooms(array $rooms, string $hotelCode = null, array $holder = null, array $params = null)
    {
        // TODO add is reserved booking Nuitee separates between reservation and confirmed booking

        $sessionId = $params['sessionId'];
        $confirmPropertyCode = $params['confirmedPropertyCode'];
        $isConfirmedBooking = $params['isConfirmed'];
        $customerComment = $params['customerComment'];
        $agent = $params['agent'];

        $bookingHolder = new Nuitee\customer;
        $bookingHolder->setFirstName($holder['firstName']);
        $bookingHolder->setLastName($holder['lastName']);
        $bookingHolder->setEmail($holder['email']);
        $bookingHolder->setTitulation($holder['title']);

        $customerRoomInfos = [];

        foreach($rooms as $key => $room){
            $customerRoomInfo = new Nuitee\customerRoomInfo;
            $customerRoomInfo->setTitulation($room['title']);
            $customerRoomInfo->setFirstName($room['firstName']);
            $customerRoomInfo->setLastName($room['lastName']);
            $customerRoomInfo->setCustomerComment('no comment');
            $customerRoomInfo->setRoomCode($room['roomCode']);
            $customerRoomInfos[] = $customerRoomInfo;
        }

        $reservationInfo = new Nuitee\reservationInfo;
        $reservationInfo->setCustomerRoomInfos($customerRoomInfos);

        $billingInfo = new Nuitee\billingInfo;
        $billingInfo->setPaymentMethodType(Nuitee\paymentMethodType::LIMIT);
        $billingInfo->setFirstName($agent->prenom);
        $billingInfo->setLastName($agent->nom);
        $billingInfo->setEmail($agent->email);
        $billingInfo->setWorkPhone($agent->tel);

        $clientIdentifier = 'ATS';

        $confirmBookingReq = new Nuitee\confirmBookingReq(
            $sessionId,
            $this->login,
            $hotelCode,
            $confirmPropertyCode,
            $isConfirmedBooking,
            $clientIdentifier,
            $bookingHolder,
            $reservationInfo,
            $billingInfo,
            $customerComment,
            $this->timeout);

        $performConfirmBooking = new Nuitee\performConfirmBooking;
        $performConfirmBooking->setConfirmBookingReq($confirmBookingReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);

        try {
            $response = $nuitee->performConfirmBooking($performConfirmBooking);
        } catch (Exception $ex){
            $ex->report();
            abort(404, "Provider can't be reached");
        }

        $generated_date = (new DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_ConfirmBooking_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_ConfirmBooking_response.xml", $nuitee->__getlastresponse());

        try{
            $statusCode = $response->getConfirmBookingRes()->getResponseStatus()->getStatusCode();
        } catch(Exception $ex){
            $ex->report();
            throw new HotelApiException();
        }
        if($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }

        // TODO Put this code in a separate function saveBooking ?
        $client = new Client;
        $client->prenom = $response->getConfirmBookingRes()->getHolder()->getFirstName();
        $client->nom = $response->getConfirmBookingRes()->getHolder()->getLastName();
        // $client->noms = $request->input("noms");
        $client->email = $response->getConfirmBookingRes()->getHolder()->getEmail();
        // $client->tel = $request->input("tel");
        // $client->tels = $request->input("tels");
        // $client->type = $request->input("type");
        // $client->adresse = $request->input("adresse");
        $client->sexe = $response->getConfirmBookingRes()->getHolder()->getTitulation();
        $client->agence_id = Auth::user()->agence_id;
        $client->agent_id = Auth::user()->id;
        $client->save();

        $checkIn = $response->getConfirmBookingRes()->getCheckInDate();
        $checkOut = $response->getConfirmBookingRes()->getcheckoutdate();

        $totalRate = $response->getConfirmBookingRes()->getRoomDetails()->getTotalRate();

        $bookHotel = new BookHotel;
        $bookHotel->bookingId = $response->getConfirmBookingRes()->getBookingId();
        $bookHotel->client_id = $client->id;
        $bookHotel->checkin = DateTime::createFromFormat('Y-m-d', $checkIn);
        $bookHotel->checkout = DateTime::createFromFormat('Y-m-d', $checkOut);
        $bookHotel->hotelID = $response->getConfirmBookingRes()->getHotelInfo()->getHotelCode();
        // TODO check what's up with the 10%
        $bookHotel->prixTotal = round($totalRate * 1.10, 0);
        $bookHotel->confirmationNumber = $response->getConfirmBookingRes()->getConfirmationNumber();
        // TODO check this later
        // TODO emm it's a number ! let's see 0: pending 1: confirmed 2: reserved 3: rejected 4: cancelled IDK
        $bookingStatus = $response->getConfirmBookingRes()->getBookingStatus();
        if(strtolower($bookingStatus) === 'confirmed'){
            $bookHotel->etat = 1;
        } else if(strtolower($bookingStatus) === 'pending'){
            $bookHotel->etat = 0;
        } else if(strtolower($bookingStatus) === 'reserved'){
            $bookHotel->etat = 2;
        } else if(strtolower($bookingStatus) === 'rejected'){
            $bookHotel->etat = 3;
        } else if(strtolower($bookingStatus) === 'cancelled'){
            $bookHotel->etat = 4;
        }

        $bookHotel->name = $response->getConfirmBookingRes()->getHotelInfo()->getHotelName();
        $bookHotel->agent_id = Auth::user()->id;
        $bookHotel->agence_id = Auth::user()->agence_id;

        $bookHotel->save();


        foreach ((array)$response->getConfirmBookingRes()->getRoomDetails()->getRoomDetails() as $ocp) {
            $BookHotelChamber = new BookHotelChamber;
            // $ageEnfant = "";
            // if (!empty($ocp->getChildrenAges)) {
            //     foreach ($ocp->getChildrenAges() as $age) {
            //         $ageEnfant .= $age . ",";
            //     }
            // }
            // $ageEnfant = rtrim($ageEnfant, ",");

            $BookHotelChamber->titre = $ocp->getRoomDescription();
            $BookHotelChamber->adult = $ocp->getAdultCount();
            $BookHotelChamber->enfant = $ocp->getChildCount();
            // $BookHotelChamber->ageEnfant = $ageEnfant;
            $BookHotelChamber->penssion = $ocp->getIncludedBoard()->getBoardId();
            $BookHotelChamber->prix = round($ocp->getRoomRate()->getPrice() * 1.10, 0);
            $BookHotelChamber->book_hotel_id = $bookHotel->id;

            $BookHotelChamber->save();
        }

        // for ($i = 0; $i < sizeof($nomAdults); $i++) {
        //     $occu = new Occupancie();
        //     $occu->sexe = $sexeAdults[$i];
        //     $occu->nom = $nomAdults[$i];
        //     $occu->prenom = $prenomAdult[$i];
        //     $occu->age = $ageAdult[$i];
        //     $occu->book_hotel_id = $bookHotel->id;

        //     $occu->save();
        // }
        // for ($i = 0; $i < sizeof($nomEnfant); $i++) {
        //     $occu = new Occupancie();
        //     $occu->sexe = $sexeEnfant[$i];
        //     $occu->nom = $nomEnfant[$i];
        //     $occu->prenom = $prenomEnfant[$i];
        //     $occu->age = $ageEnfant[$i];
        //     $occu->book_hotel_id = $bookHotel->id;

        //     $occu->save();
        // }

        $result = $response->getConfirmBookingRes();

        $booking = [];
        $booking['bookingId'] = $response->getConfirmBookingRes()->getBookingId();
        $booking['confirmationNumber'] = $response->getConfirmBookingRes()->getConfirmationNumber();
        $booking['remarks'] = $result->getRemarks();
        $booking['checkIn'] = $result->getCheckInDate();
        $booking['checkOut'] = $result->getCheckOutDate();
        $booking['price'] = $result->getRoomDetails()->getTotalRate();
        $booking['currencyCode'] = $result->getCurrency();
        $booking['status'] = $result->getBookingStatus();
        $booking['confirmationNumber'] = $result->getConfirmationNumber();

        $booking['defaultCancelPolicy'] = $result->getCancelPoliciesInfos()->getDefaultPolicy();

        $rooms = [];
        foreach((array)$result->getRoomDetails()->getRoomDetails() as $roomDetail){
            $tmp_room = [];
            $tmp_room['firstName'] = $roomDetail->getFirstName();
            $tmp_room['lastName'] = $roomDetail->getLastName();
            $tmp_room['adultCount'] = $roomDetail->getAdultCount();
            $tmp_room['childCount'] = $roomDetail->getChildCount();
            $tmp_room['board'] = $roomDetail->getIncludedBoard()->getBoardDescription();
            $tmp_room['roomDescription'] = $roomDetail->getRoomDescription();
            $rooms[] = $tmp_room;
        }

        $booking['rooms'] = $rooms;

        $booking['refundableTag'] = $result->getCancelPoliciesInfos()->getRefundableTag();
        $booking['cancellationPolicy'] = $result->getCancelPoliciesInfos()->getCancellationPolicies();

        $booking['cancellationPolicyInfos'] = [];
        foreach((array)$result->getCancelPoliciesInfos()->getCancelPolicyInfos() as $cancelPolicyInfo){
            $tmp_cpi['amount'] = $cancelPolicyInfo->getAmount();
            $tmp_cpi['cancelTime'] = $cancelPolicyInfo->getCancelTime();
            $tmp_cpi['type'] = $cancelPolicyInfo->getType();
            $tmp_cpi['cancellationPolicy'] = $cancelPolicyInfo->getCancellationPolicy();
            $booking['cancellationPolicyInfos'][] = $tmp_cpi;
        }

        return $booking;
    }

    public function cancelBooking(string $bookingId, ?string $reason)
    {
        $sessionId = null;
        $cancelBookingReq = new Nuitee\cancelBookingReq($sessionId, $this->login, $bookingId, $reason, $this->timeout);

        $performCancelBooking = new Nuitee\performCancelBooking;
        $performCancelBooking->setCancelBookingReq($cancelBookingReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        try {
            $response = $nuitee->performCancelBooking($performCancelBooking);
        } catch (Exception $ex){
            $ex->report();
            abort(404, "Provider can't be reached");
        }

        $generated_date = (new DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_CancelBooking_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_CancelBooking_response.xml", $nuitee->__getlastresponse());

        try{
            $statusCode = $response->getCancelBookingRes()->getResponseStatus()->getStatusCode();
        } catch(Exception $ex){
            $ex->report();
            throw new HotelApiException();
        }
        if($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }

        return [
            'status' => $response->getCancelBookingRes()->getCancellationStatus(),
            'cancellationAmount' => $response->getCancelBookingRes()->getCancellationAmount(),
            'refundAmount' => $response->getCancelBookingRes()->getRefundAmount(),
        ];
    }

    /**
     * Gets Nuitee booking details.
     *
     * @param int $bookingId
     * @return \App\Providers\Nuitee\getBookingDetailsRes
     */
    public function getBookingDetails(string $bookingId){

        $req = new Nuitee\getBookingDetailsReq($this->login, $bookingId, $this->timeout);

        $performGetBookingDetails = new Nuitee\performGetBookingDetails;
        $performGetBookingDetails->setGetBookingDetailsReq($req);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        try {
            $response = $nuitee->performGetBookingDetails($performGetBookingDetails);
        } catch (Exception $ex){
            $ex->report();
            abort(404, "Provider can't be reached");
        }

        // $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        // Storage::disk('local')->put("xml/nuitee/".$generated_date."_BookingDetails_request.xml", $nuitee->__getlastrequest());
        // Storage::disk('local')->put("xml/nuitee/".$generated_date."_BookingDetails_response.xml", $nuitee->__getlastresponse());

        try{
            $statusCode = $response->getGetBookingDetailsRes()->getResponseStatus()->getStatusCode();
        } catch(Exception $ex){
            $ex->report();
            throw new HotelApiException();
        }
        if($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }

        return $response->getGetBookingDetailsRes();
    }

    /**
     * Updates or create a hotel in the database
     *
     * @param App\Models\Hotel\Hotel $hotel
     * @param App\Models\Hotel\NuiteeHotel $nuiteeHotel
     * @return App\Models\Hotel\Hotel
     */
    private static function updateHotel($hotel, $nuiteeHotel){

        $hotel->name = $nuiteeHotel->name;
        $hotel->address1 = $nuiteeHotel->address1;
        $hotel->address2 = $nuiteeHotel->address2;
        $hotel->latitude = $nuiteeHotel->latitude;
        $hotel->longitude = $nuiteeHotel->longitude;
        $hotel->city = $nuiteeHotel->city;
        $hotel->postal_code = $nuiteeHotel->postalCode;
        $hotel->state = $nuiteeHotel->stateProvince;
        $hotel->country = $nuiteeHotel->country;
        $hotel->airport_code = $nuiteeHotel->airportCode;
        // $hotel->main_image = $nuiteeHotel->images->first();
        $hotel->description = $nuiteeHotel->hotelDescription;

        return $hotel;
    }

    /**
     * Find hotel by provided information
     *
     * @param array $info
     * @return App\Models\Hotel\Hotel
     */
    private static function findHotelByInfo($info){
        $hotels = Hotel::where([
            ['name', $info['name']],
            ['city', $info['city']],
            ['country', $info['country']],
        ])->get();

        if($hotels->isEmpty()){
            return new Hotel;
        }

        if($hotels->count() > 1){
            // do something to notify that there are 2 hotels
            // with same name and location
            \Log::debug('Hotels with same info : ');
            foreach($hotels as $hotel){
                \Log::debug('Hotel : '. $hotel->id);
            }

            return new Hotel;
        }

        return $hotels->first();
    }

    /**
     * Maps getHotelInfo result to NuiteeHotel object
     *
     * @param mixed $result
     * @param App\Models\Hotel\NuiteeHotel $nuiteeHotel
     * @return App\Models\Hotel\NuiteeHotel
     */
    private static function mapToNuiteeHotel($result, $nuiteeHotel){
        $nuiteeHotel->id = $result->getHotelId();
        $nuiteeHotel->name = $result->getName();
        $nuiteeHotel->address1 = $result->getAddress1();
        $nuiteeHotel->address2 = $result->getAddress2();
        $nuiteeHotel->city = $result->getCity();
        $nuiteeHotel->cityCode = $result->getCityCode();
        $nuiteeHotel->stateProvince = $result->getStateProvince();
        $nuiteeHotel->postalCode = $result->getStateProvince();
        $nuiteeHotel->country = $result->getCountry();
        $nuiteeHotel->latitude = $result->getLatitude();
        $nuiteeHotel->longitude = $result->getLongitude();
        $nuiteeHotel->airportCode = $result->getAirportCode();
        $nuiteeHotel->propertyCategory = $result->getPropertyCategory();
        $nuiteeHotel->propertyCurrency = $result->getPropertyCurrency();
        $nuiteeHotel->starRating = $result->getStarRating();
        $nuiteeHotel->confidence = $result->getConfidence();
        $nuiteeHotel->supplierType = $result->getSupplierType();
        $nuiteeHotel->location = $result->getLocation();
        $nuiteeHotel->chaincodeid = $result->getChaincodeid();
        $nuiteeHotel->highrate = $result->getHighrate();
        $nuiteeHotel->lowrate = $result->getLowrate();
        $nuiteeHotel->checkinTime = $result->getCheckinTime();
        $nuiteeHotel->checkoutTime = $result->getCheckoutTime();
        $nuiteeHotel->cityCode = $result->getCityCode();
        $nuiteeHotel->hotelDescription = $result->getHotelDescription();
        $nuiteeHotel->hotelDiningDescription = $result->getHotelDiningDescription();
        $nuiteeHotel->hotelAttraction = $result->getHotelAttraction();
        $nuiteeHotel->hotelLocationDescription = $result->getHotelLocationDescription();
        $nuiteeHotel->hotelFeatures = $result->getHotelFeatures();
        $nuiteeHotel->hotelAmenitiesDescription = $result->getHotelAmenitiesDescription();

        return $nuiteeHotel;
    }

    /**
     * maps images to NuiteeImages and saves them in NuiteeHotel
     *
     * @param mixed $result
     * @param App\Models\Hotel\NuiteeHotel $nuiteeHotel
     * @return App\Models\Hotel\NuiteeHotel
     */
    private static function assignImages($result, &$nuiteeHotel){
        $nuiteeImages = [];
        $images = $result->getHotelImages();

        if(!$images){
            return $nuiteeHotel;
        }

        foreach($images as $image){
            $nuiteeImage = new NuiteeImage;
            $nuiteeImage->caption = $image->getCaption();
            $nuiteeImage->defaultImage = $image->getDefaultImage();
            $nuiteeImage->order = $image->getOrder();
            $nuiteeImage->thumbnailUrl = $image->getThumbnailUrl();
            $nuiteeImage->url = $image->getUrl();
            $nuiteeImages[] = $nuiteeImage;
        }

        $nuiteeHotel->images()->saveMany($nuiteeImages);

        return $nuiteeHotel;
    }

    /**
     * maps attributes to NuiteeAttribute and saves them in NuiteeHotel
     *
     * @param mixed $result
     * @param App\Models\Hotel\NuiteeHotel $nuiteeHotel
     * @return App\Models\Hotel\NuiteeHotel
     */
    private static function assignAttributes($result, $nuiteeHotel){
        $nuiteeAttributes = [];
        $attributes = $result->getHotelAttributeses();

        if(!$attributes){
            return $nuiteeHotel;
        }

        foreach($attributes as $attribute){
            $att = new NuiteeAttribute;
            $att->attribute = $attribute;
            $nuiteeAttributes[] = $att;
        }

        $nuiteeHotel->images()->saveMany($nuiteeAttributes);

        return $nuiteeHotel;
    }
}
