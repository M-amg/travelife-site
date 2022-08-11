<?php

namespace App\Services;

use App\Adapters\HotelBedsAdapter;
use App\Adapters\HotelProviderInterface;
use App\Adapters\JumboAdapter;
use App\models\config\TlMarkUp;
use App\models\hotelAPI\Hotels as JumboHotels;
use App\models\hotelAPI\Basket as JumboBaskets;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use App\Exceptions\HotelApiException;

use Dompdf\Exception;

//use LaravelLocalization;

class HotelServiceII
{
    private $hotelProvider;

    public function __construct(?HotelProviderInterface $hotelProvider = null){

        $this->hotelProvider = $hotelProvider;
    }

    public function getHotels($checkIn, $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode,$isMG=null){
        $sessionId = null;
        if ($isMG){
           $t="MG";
        }else{
            $t="";
        }

        $jumbo_cities = DB::table('jumbo_cities')->where('city_id', $cityCode)->get();

        $jumbo_hotels = [];

        //$jumbo_feature = Feature::where('name', 'jumbo_hotels')->get()->first()->enabled;
        $jumbo_feature = 1;

        if($jumbo_feature === 1){
            // if($jumbo_cities->isNotEmpty() && $jumbo_cityCode = $jumbo_cities->first()->id){

                 $this->hotelProvider = new JumboAdapter();
            //     $jumbo_hotels = $this->hotelProvider->getHotels($checkIn, $checkOut, $jumbo_cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode,null,$isMG);
            //     foreach($jumbo_hotels as &$hotel){
            //         $hotel['p'] = 2;
            //     }
            //     unset($hotel);
            // }
            $coordinates = [
                'latitude' => explode(',',$cityCode)[0],
                'longitude' =>explode(',',$cityCode)[1],
            ];
            $jumbo_hotels = $this->hotelProvider->getHotels($checkIn, $checkOut, $coordinates, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode,null,$isMG);
            foreach($jumbo_hotels as &$hotel){
                     $hotel['p'] = 2;
            }
                unset($hotel);
        }
    

        //$hotelbeds_feature = Feature::where('name', 'hotelbeds_hotels')->get()->first()->enabled;
        $hotelbeds_feature =0;

        $hotelbeds_city = null;
        if ($hotelbeds_feature === 1) {
            $hotelbeds_city = DB::table('cities')->where('id', $cityCode)->get()->first();
        }

        $hotelbeds_hotels = [];
        if ($hotelbeds_city) {
            $coordinates = [
                'latitude' => $hotelbeds_city->latitude,
                'longitude' => $hotelbeds_city->longitude,
            ];
            $this->hotelProvider = new HotelBedsAdapter();
          //  dd($type);

            $hotelbeds_hotels = $this->hotelProvider->getHotels($checkIn, $checkOut, $coordinates, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode,null,$isMG);

            // add hotel information from database
            foreach($hotelbeds_hotels as &$hotel){

                $hotel['p'] = 3;//$image_path;
                $hotel['pictureUrl'] = '';//$image_path;
                $hotel['address'] = '';//$hotelbeds_hotel['address'];
                $hotel['description'] = '';//$hotelbeds_hotel['description'];
            }
            unset($hotel);



        }

        $data = [];
        $data['cityName'] = 'TODO';
        $data['countryName'] = 'TODO';
        $data['checkIn'] = $checkIn;
        $data['checkOut'] = $checkOut;
        $data['guestRooms'] = $guestRooms;
        $data['hotels'] = array_merge($jumbo_hotels, $hotelbeds_hotels);

        return $data;
    }

    public function getHotel($hotelCode) {
        return $this->hotelProvider->getHotel($hotelCode);
    }

    public function getRooms($hotelCode, \DateTime $checkIn, \DateTime $checkOut, $guestRooms, $sessionId){
        return $this->hotelProvider->getRooms($hotelCode, $checkIn, $checkOut, $guestRooms, $sessionId);
    }

    public function confirmRooms($rooms, $checkin, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId){
        return $this->hotelProvider->confirmRooms($rooms, $checkin, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId);
    }

    public function bookRooms($rooms, $hotelCode, $holder, $params) {
        return $this->hotelProvider->bookRooms($rooms, $hotelCode, $holder, $params);
    }

    public function bookRoomsNuitee($sessionId, $confirmedRooms, $hotelCode, $confirmPropertyCode, $isConfirmedBooking, $customerComment, $holder_input, $paxes, $agent){

        // TODO: This is a temporary adaptation to get only 1 pax for each room
        $clients = [];
        foreach($paxes as $pax){
            $clients[] = $pax['paxes'][0];
        }

        $holder = new Nuitee\customer;
        $holder->setFirstName($clients[0]['firstName']);
        $holder->setLastName($clients[0]['lastName']);
        $holder->setEmail($holder_input['email']);
        $holder->setTitulation($clients[0]['title']);

        $customerRoomInfos = [];

        foreach($confirmedRooms as $key => $room){
            $customerRoomInfo = new Nuitee\customerRoomInfo;
            $customerRoomInfo->setTitulation($clients[$key]['title']);
            $customerRoomInfo->setFirstName($clients[$key]['firstName']);
            $customerRoomInfo->setLastName($clients[$key]['lastName']);
            $customerRoomInfo->setCustomerComment('no comment');
            $customerRoomInfo->setRoomCode($room['code']);
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
            $holder,
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

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
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
        $bookHotel->checkin = \DateTime::createFromFormat('Y-m-d', $checkIn);
        $bookHotel->checkout = \DateTime::createFromFormat('Y-m-d', $checkOut);
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

    public function bookHotelBedsRooms($rooms){
        $result = (new HotelBedsAdapter)->book($rooms);

        return $result;
    }

    public function bookJumboRooms($hotel_id, $checkIn, $checkOut, $rooms, $nationality, $occupancies, $paxes, $confirmedRooms) {

        $titular = $paxes[0]['paxes'][0]['firstName'] .' '. $paxes[0]['paxes'][0]['lastName'];

        $paxLists = [];
        $i = 0;
        foreach($paxes as $room){
            foreach($room['paxes'] as $pax)  {
                $paxList = [];
                $paxL = new JumboHotels\PaxRQ(40);
                $paxL->setName($pax['firstName'] .' '. $pax['lastName']);
                $paxL->setNationality($nationality);
                $paxList[] = $paxL;
                $paxRQ = new JumboHotels\PaxListRQ();
                $paxRQ->setPax($paxList);
                $paxRQ->setRoomTypeCode($room['typeCode']);
                $paxLists[] = $paxRQ;
                $i++;
            }
        }


        if (Session::has('Pax')) {
            Session::forget('Pax');
        }
        Session::put('Pax', $paxList);

        $extended = new JumboHotels\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");
        $ConfirmRQV22 = new JumboHotels\ConfirmRQV22(true, false);
        $ConfirmRQV22->setAgencyCode(config('services.jumbo.agency_code'));
        $ConfirmRQV22->setBrandCode(config('services.jumbo.brand_code'));
        $ConfirmRQV22->setPointOfSaleId(config('services.jumbo.point_of_sale'));
        $ConfirmRQV22->setLanguage('fr');
        $ConfirmRQV22->setEstablishmentId($hotel_id);
        $ConfirmRQV22->setOccupancies($occupancies);
        $ConfirmRQV22->setExtendedLogin($extended);
        $ConfirmRQV22->setPaxList($paxLists);
        $ConfirmRQV22->setTitular($titular);
        //TODO change this to a travelmarket email address
        $ConfirmRQV22->setSendDocumentationTo("mouhcine.amghar@gmail.com");
        $ConfirmRQV22->setAgencyReference("NanoPlus");
        $ConfirmRQV22->setCheckin($checkIn);
        $ConfirmRQV22->setCheckout($checkOut);

        $confirm = new JumboHotels\confirmExtendsV22();
        $confirm->setConfirmRQV22_1($ConfirmRQV22);

        $service = new JumboHotels\HotelBookingHandlerService(['trace' => 1, 'exceptions' => 0]);
        $response = $service->confirmExtendsV22($confirm);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".$generated_id.'_confirmBooking_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".$generated_id.'_confirmBooking_response.xml', $service->__getLastResponse());

        $result = $response->getResult();

        $booking = [];
        $booking['bookingId'] = $result->getBasket()->getBasketId();
        $booking['confirmationNumber'] = $result->getServiceId(); // TODO temporary
        $booking['remarks'] = '';
        foreach((array) $result->getComments() as $comment){
            if($comment->getType() === 'ERRATA'){
                $txt = $comment->getText() . '<br><br>';
                $booking['remarks'] .= $txt;
            }
        }
        $booking['checkIn'] = $result->getCheckin();
        $booking['checkOut'] = $result->getCheckout();
        $booking['price'] = $result->getTotal()->getValue();
        $booking['currencyCode'] = $result->getTotal()->getCurrencyCode();
        $booking['status'] = $result->getStatus();
        $booking['confirmationNumber'] = ''; //$result->getConfirmationNumber();

        $booking['defaultCancelPolicy'] = ''; //$result->getCancelPoliciesInfos()->getDefaultPolicy();

        $rooms = [];
        foreach((array)$result->getOccupations() as $key => $occ){
            $tmp_room = [];
            $tmp_room['firstName'] = $paxes[$key]['paxes'][0]['firstName'];
            $tmp_room['lastName'] = $paxes[$key]['paxes'][0]['lastName'];
            $tmp_room['adultCount'] = $occ->getAdults();
            $tmp_room['childCount'] = $occ->getChildren();
            $tmp_room['board'] = $occ->getBoardTypeCode();
            $tmp_room['roomDescription'] = $occ->getDescription();
            $rooms[] = $tmp_room;
        }

        $booking['rooms'] = $rooms;

        $booking['refundableTag'] = ''; //$result->getCancelPoliciesInfos()->getRefundableTag();
        $booking['cancellationPolicy'] = ''; //$result->getCancelPoliciesInfos()->getCancellationPolicies();

        $booking['cancellationPolicyInfos'] = [];
        foreach((array) $result->getOccupations() as $occ) {
            foreach((array) $occ->getCancellationComments() as $cancellationTerm){
                if($cancellationTerm->getType() === 'Cancellation term'){
                    $text = $cancellationTerm->getText();
                    $matches = [];
                    preg_match('/^([0-9]+) - (.+)%$/', $text, $matches);

                    $booking['cancellationPolicyInfos'][] = [
                        'type' => 'percentage',
                        'amount' => $matches[2],
                        'cancelTime' => $checkIn->subDays($matches[1]),
                        'cancellationPolicy' => '',
                    ];
                }
            }
        }


        $confirmation = $this->confirmJumboBooking($booking['bookingId']);

        if(isset($confirmation['status']) && $confirmation['status'] === "CLOSED") {
            $booking['status'] = 'CONFIRMED';
        }

        return $booking;
    }

    public function generateVoucher($bookingId){

        $req = new Nuitee\generateVoucherReq($this->login, $bookingId, $this->timeout);

        $performGenerateVoucher = new Nuitee\performGenerateVoucher;
        $performGenerateVoucher->setGenerateVoucherReq($req);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        try {
            $response = $nuitee->performGenerateVoucher($performGenerateVoucher);
        } catch (Exception $ex){
            $ex->report();
            abort(404, "Provider can't be reached");
        }

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_GenerateVoucher_request.xml", $nuitee->__getlastrequest());
        Storage::disk('local')->put("xml/nuitee/".$generated_date."_GenerateVoucher_response.xml", $nuitee->__getlastresponse());

        try{
            $statusCode = $response->getGenerateVoucherRes()->getResponseStatus()->getStatusCode();
        } catch(Exception $ex){
            $ex->report();
            throw new HotelApiException();
        }
        if($statusCode !== '1000') {
            throw new HotelApiException($statusCode);
        }

        return $response->getGenerateVoucherRes();
    }

    public function confirmJumboBooking($bookingId){

        $confirmRQ = new JumboBaskets\ConfirmRQ();
        $confirmRQ->setBasketId($bookingId);
        $confirmRQ->setAgencyCode(config('services.jumbo.agency_code'));
        $confirmRQ->setBrandCode(config('services.jumbo.brand_code'));
        $confirmRQ->setPointOfSaleId(config('services.jumbo.point_of_sale'));

        $confirmF = new JumboBaskets\confirm();
        $confirmF->setConfirmRQ_1($confirmRQ);

        $service = new JumboBaskets\BasketHandlerService(['trace' => 1, 'exceptions' => 0]);

        $response = $service->confirm($confirmF);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".$generated_id.'_confirmBasket_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".$generated_id.'_confirmBasket_response.xml', $service->__getLastResponse());

        try{
            $result = $response->getResult();
        } catch (\Exception $ex){
            $ex->report();
            return [];
        }

        return [
            'status' => $result->getStatus(),
        ];

    }

    public function cancelBooking(string $bookingId, ?string $reason){
        return $this->hotelProvider->cancelBooking($bookingId, $reason);
    }

    public function cancelNuiteeBooking($bookingId, $reason){

        $sesssionId = null;
        $cancelBookingReq = new Nuitee\cancelBookingReq($sesssionId, $this->login, $bookingId, $reason, $this->timeout);

        $performCancelBooking = new Nuitee\performCancelBooking;
        $performCancelBooking->setCancelBookingReq($cancelBookingReq);

        $nuitee = new Nuitee\NuiteeBookingService(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => false]);
        try {
            $response = $nuitee->performCancelBooking($performCancelBooking);
        } catch (Exception $ex){
            $ex->report();
            abort(404, "Provider can't be reached");
        }

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
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

    public function cancelJumboBooking($bookingId, $reason){

        $extended = new JumboHotels\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");

        $cancelRQ = new JumboBaskets\CancelRQV22();
        $cancelRQ->setBasketId($bookingId);
        $cancelRQ->setAgencyCode(config('services.jumbo.agency_code'));
        $cancelRQ->setBrandCode(config('services.jumbo.brand_code'));
        $cancelRQ->setPointOfSaleId(config('services.jumbo.point_of_sale'));
        $cancelRQ->setExtendedLogin($extended);

        $cancel = new JumboBaskets\cancelV22();
        $cancel->setCancelRQV22_1($cancelRQ);

        $service = new JumboBaskets\BasketHandlerService(['trace' => 1, 'exceptions' => 0]);
        $response = $service->cancelV22($cancel);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/jumbo/NanoPLUS.zampaktu.".$generated_date."_CancelJumboBooking_request.xml", $service->__getlastrequest());
        Storage::disk('local')->put("xml/jumbo/NanoPLUS.zampaktu.".$generated_date."_CancelJumboBooking_response.xml", $service->__getlastresponse());

        try{
            $result = $response->getResult();
        } catch (Exception $ex) {
            $ex->report();
            return [];
        }

        $cancellation = [
            'status' => $result->getStatus(),
            'currencyCode' => $result->getTotal()->getCurrencyCode(),
            'value' => $result->getTotal()->getValue(),
        ];

        return $cancellation;
    }

    public function cancelHotelBedsBooking($bookingId, $reason) {
        $result = (new HotelBedsAdapter)->cancel($bookingId, $reason);

        return $result;
    }

    public function getBookingDetails(string $bookingId){
        return $this->hotelProvider->getBookingDetails($bookingId);
    }
}