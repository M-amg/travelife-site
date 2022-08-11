<?php


namespace App\Adapters;

use App\models\config\TlJumbo;
use App\models\hotelAPI\Hotels as JumboHotels;
use App\models\hotelAPI\Basket as JumboBaskets;
use App\Services\UtilityService;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class JumboAdapter implements HotelProviderInterface
{
    private $JUMBO_WSDL ;
    private $JUMBO_BRAND_CODE ;
    private $JUMBO_POINTOFSALE_ID ;
    private $JUMBO_AGENCY_CODE ;

    public function __construct()
    {
        $this->JUMBO_WSDL = TlJumbo ::select('JUMBO_WSDL')->first();
        $this->JUMBO_BRAND_CODE = TlJumbo ::select('JUMBO_BRAND_CODE')->first()->JUMBO_BRAND_CODE;
        $this->JUMBO_POINTOFSALE_ID = TlJumbo ::select('JUMBO_POINTOFSALE_ID')->first()->JUMBO_POINTOFSALE_ID;
        $this->JUMBO_AGENCY_CODE = TlJumbo ::select('JUMBO_AGENCY_CODE')->first()->JUMBO_AGENCY_CODE;
        $this->soap_options = [
            'trace' => 1,
            'exceptions' => 0
        ];
        if (App::environment('local')) {
            $this->soap_options = array_merge([
                'proxy_host' => config('services.proxy.host'),
                'proxy_port'=> config('services.proxy.port'),
            ], $this->soap_options);
        }
    }

    public function getHotels(\DateTime $checkIn, \DateTime $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms,
                              $currency, $languageCode, $sessionId = null, $isMG=null)
    {

        $occupancies = [];

        $adults = 0;
        $children = 0;
        $childrenAges = [];

        foreach ($guestRooms as $room) {
            $adults += $room['adults'];
            $children += $room['children'];
            // if($room['children'] > 0){
            //     $childrenAges = array_merge($childrenAges, $room['childrenAges']);
            // }
            $occupancy = new JumboHotels\Occupancy($room['adults'], $room['children'], 1);
            if ($room['children'] > 0) {
                $occupancy->setChildrenAges($room['childrenAges']);
            }
            $occupancies[] = $occupancy;
        }

        $paxes = $adults + $children;
        $nationalities = array_fill(0, $paxes, $guestNationality);


        $extended = new JumboHotels\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");

        $paxNationalities = new JumboHotels\PaxNationalitiesRQ();
        $paxNationalities->setNationality($nationalities);

        $hotelQuery = new JumboHotels\AvailableHotelsByMultiQueryRQV22(0, 0, true, 99999, 99999, false, 99999);
        $hotelQuery->setBrandCode($this->JUMBO_BRAND_CODE);
        $hotelQuery->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
        $hotelQuery->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $hotelQuery->setLanguage('fr');
        $hotelQuery->setCheckin($checkIn);
        $hotelQuery->setCheckout($checkOut);
        $hotelQuery->setOccupancies($occupancies);
        //$hotelQuery->setCityCode([$cityCode]);

        $coordinates=new JumboHotels\CoordinatesRQ();
        $coordinates->setRadius(1000);
        $coordinates->setLatitude($cityCode["latitude"]);
        $coordinates->setLongitude($cityCode["longitude"]);

        $hotelQuery->setCoordinates([$coordinates]);

        $hotelQuery->setExtendedLogin($extended);
        $hotelQuery->setPaxNationalities($paxNationalities);

        $results = new JumboHotels\availableHotelsByMultiQueryV22();
        $results->setAvailableHotelsByMultiQueryRQV22_1($hotelQuery);


        $service = new JumboHotels\HotelBookingHandlerService($this->soap_options);
        try {
            $response = $service->availableHotelsByMultiQueryV22($results);
        } catch (Exception $ex) {
            $ex->report();
            return [];
        }

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/List/" . $generated_id . '_availableHotels_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/List/" . $generated_id . '_availableHotels_response.xml', $service->__getLastResponse());

        try {
            $available_hotels = $response->getResult()->getAvailableHotels();
        } catch (Exception $ex) {
            return [];
        }

        if (!$available_hotels) {
            return [];
        }

        $hotel_ids = [];
        foreach ($available_hotels as $hotel) {
            $hotel_ids[] = $hotel->getEstablishment()->getId();
        }

        $db_hotels = DB::connection("hotels")
            ->table("jumbo_hotels")
            ->join("jumbo_categories", "jumbo_hotels.categoryCode", "=", "jumbo_categories.id")
            ->select(["jumbo_hotels.id as code", "jumbo_categories.group as group"])
            ->whereIn('jumbo_hotels.id', $hotel_ids)
            ->get();


        $hotels = [];
        foreach ($available_hotels as $hotel) {
            $establishment = $hotel->getEstablishment();
            $group = $db_hotels->firstWhere("code", "=", $establishment->getId())->group ?? null;
            $starRating = $this->getStarRating($group);

            $url = $establishment->getImageUrl();
            $hotel_tmp['pictureUrl'] = $url;
            $hotel_tmp['hotelName'] = $establishment->getName();
            $hotel_tmp['address'] = $establishment->getAddress()->getAddress();
            $hotel_tmp['description'] = $establishment->getShortDescription();
            $hotel_tmp['code'] = $establishment->getId();
            $hotel_tmp['starRating'] = $starRating;
            $hotel_tmp['provider'] = 'jumbo';
            $hotel_tmp['providerId'] = 2;

            $type = $establishment->getCategoryCode();
            if($type == 30){
                $hotel_tmp['establishement'] = "maison";
            }elseif($type == 31){
                $hotel_tmp['establishement'] = "villa";
            }elseif($type == 32){
                $hotel_tmp['establishement'] = "residence";
            }else{
                $hotel_tmp['establishement'] = "hotel";
            }

            $hotelRates_tmp = [];
            $min = $hotel->getRoomCombinations()[0]->getPrices()[0]->getAmount()->getValue();
            $boardCategoryCode = "RO";
            $currency = $hotel->getRoomCombinations()[0]->getPrices()[0]->getAmount()->getCurrencyCode();
            $amount = 0;
            $promo = false;

            foreach ($hotel->getRoomCombinations() as $roomCombination) {
                foreach ($roomCombination->getPrices() as $price) {
                    $value = $price->getAmount()->getValue();
                    if ($value <= $min) {
                        $min = $value;
                        $currency = $price->getAmount()->getCurrencyCode();
                        $boardCategoryCode = $price->getBoardCategoryCode();
                        $promo = $price->getOffer();
                        $pr = $price->getRoomPrices();

                        foreach ((array)$pr as $roomPrice) {
                            foreach ((array)$roomPrice->getComments() as $comment) {
                                if ($comment->getType() === 'Cancellation term') {
                                        $text = $comment->getText();
                                        $matches = [];
                                        preg_match('/^([0-9]+) - (.+)%$/', $text, $matches);
                                        $amount = $matches[2];
                                }

                            }
                        }

                    }
                }
            }

            $minRate = floatval($min);
            if ($amount == 0) {
                $cancelCondition = "Annulation gratuite";
            }elseif($amount == 100){
                $cancelCondition = "Non remboursable";
            }else{
                $cancelCondition = "Flexible";
            }
            $hotel_tmp['cancelCondition'] = $cancelCondition;
            $hotel_tmp['promo'] = $promo;
            $hotel_tmp['boardCategoryCode'] = $boardCategoryCode;

            $hotelRates_tmp['minRate'] = ceil(UtilityService::addPercentage($minRate, 'Jumbo'));
            //$hotelRates_tmp['minRate'] = $minRate;
            // $hotelRates_tmp['maxRate'] = $establishment->getRateDetails()->getMaxRate();
            $hotelRates_tmp['currency'] = $currency;
            $hotel_tmp['hotelRates'] = $hotelRates_tmp;
            if ($isMG)
                $hotel_tmp['route'] = route('manage.api.hotel', ['code' => $establishment->getId(), 'p' => 2]);
            else
                $hotel_tmp['route'] = route('api.hotel', ['code' => $establishment->getId(), 'p' => 2]);

            $hotels[] = $hotel_tmp;
        }

        return $hotels;

    }
    public function getRooms($hotel_id, \DateTime $checkIn, \DateTime $checkOut, $guestRooms, $sessionId = null)
    {
        $occupancies = [];

        foreach ($guestRooms as $room) {
            $occupancy = new JumboHotels\Occupancy($room['adults'], $room['children'], 1);
            if ($room['children'] > 0) {
                $occupancy->setChildrenAges($room['childrenAges']);
            }
            $occupancies[] = $occupancy;
        }

        $extended = new JumboHotels\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");

        $hotelQuery = new JumboHotels\AvailableHotelsByMultiQueryRQV22(0, 0, false, 9999, 9000, false, 99999);
        $hotelQuery->setBrandCode($this->JUMBO_BRAND_CODE);
        $hotelQuery->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
        $hotelQuery->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $hotelQuery->setExtendedLogin($extended);
        $hotelQuery->setLanguage('fr');
        $hotelQuery->setCheckin($checkIn);
        $hotelQuery->setCheckout($checkOut);
        $hotelQuery->setOccupancies($occupancies);
        $hotelQuery->setEstablishmentId([$hotel_id]);
        $hotelQuery->setOrderBy('PRICE ORDERING,');

        $availableHotelsRQ = new JumboHotels\availableHotelsByMultiQueryV22();
        $availableHotelsRQ->setAvailableHotelsByMultiQueryRQV22_1($hotelQuery);

        $service = new JumboHotels\HotelBookingHandlerService($this->soap_options);
        $response = $service->availableHotelsByMultiQueryV22($availableHotelsRQ);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/roomAvailable/" . $generated_id . '_getAvaialbleRooms_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/roomAvailable/" . $generated_id . '_getAvaialbleRooms_response.xml', $service->__getLastResponse());

        $availableHotel = $response->getResult()->getAvailableHotels()[0];
        $establishment = $availableHotel->getEstablishment();
        //dd($establishment);
        $hotel['name'] = $establishment->getName();
        $hotel['code'] = $establishment->getId();
        $hotel['address'] = $establishment->getAddress()->getAddress();
        $hotel['city'] = $establishment->getAddress()->getCityName();
        $hotel['country'] = $establishment->getAddress()->getCountryName();
        $hotel['starRating'] = $establishment->getCategoryCode();
        $hotel['longitude'] = $establishment->getLongitude();
        $hotel['latitude'] = $establishment->getLatitude();
        $hotel['checkIn'] = $checkIn;
        $hotel['checkOut'] = $checkOut;
        $hotel['provider'] = 'jumbo';
        $hotel['providerId'] = 2;

        $hotel['rates'] = [];
        $hotel['rooms'] = [];
        foreach ($availableHotel->getRoomCombinations() as $combination) {
            foreach ($combination->getPrices() as $rate) {

                $tmp_rate = [];

                $hotel['currency'] = $rate->getAmount()->getCurrencyCode();
                $tmp_rate['totalPrice'] = ceil(UtilityService::addPercentage($rate->getAmount()->getValue(), 'Jumbo'));
                //$tmp_rate['totalPrice'] = $rate->getAmount()->getValue();
                $tmp_rate['rateCode'] = 'TODO';//$rate->getRateDetailCode();
                $tmp_rate['cancelPolicies'] = [];
                $tmp_rate['refund'] = 'TODO';//$rate->getCancelPoliciesInfos()->getRefundableTag();

                $pr = $rate->getRoomPrices();
                foreach ((array)$pr as $roomPrice) {
                    foreach ((array)$roomPrice->getComments() as $comment) {
                        if ($comment->getType() === 'Cancellation term') {
                            // $tmp_policy = [];

                            $text = $comment->getText();
                            $matches = [];
                            preg_match('/^([0-9]+) - (.+)%$/', $text, $matches);

                            $tmp_policy['amount'] = $matches[2];
                            $tmp_checkIn = clone $checkIn;
                            $tmp_policy['cancelTime'] = $tmp_checkIn->subDays($matches[1]);
                            // $tmp_policy['cancellationPolicy'] = $policy->getCancellationPolicy();
                            $tmp_policy['type'] = 'percentage';
                            $tmp_rate['cancelPolicies'][] = $tmp_policy;

                        }

                    }
                }

                $tmp_rate['rooms'] = [];
                foreach ((array)$rate->getRoomPrices() as $room) {
                    $tmp_room = [];

                    $tmp_room['typeCode'] = $room->getTypeCode();
                    $tmp_room['roomCode'] = $room->getRatePlanCode(); //$room->getRoomCode();
                    $tmp_room['adults'] = $room->getPaxes(); // TODO $room->getAdultCount();
                    $tmp_room['children'] = 0; // TODO $room->getChildCount();
                    $tmp_room['price'] = $room->getPrice();
                    $tmp_room['description'] = $room->getTypeName();

                    $tmp_room['includedBoard']['description'] = $rate->getBoardTypeName(); //$room->getIncludedBoard()->getBoardDescription();
                    $tmp_room['includedBoard']['boardId'] = $rate->getBoardTypeCode(); //$room->getIncludedBoard()->getBoardId();
                    $tmp_room['includedBoard']['price'] = 'TODO'; //$room->getIncludedBoard()->getPrice();

                    // if($room->getBoards()->getBoards()){
                    //     $tmp_room['boards'] = [];
                    //     foreach ($room->getBoards()->getBoards() as $board) {
                    //         $tmp_board = [];

                    //         $tmp_board['price'] = $board->getPrice();
                    //         $tmp_board['description'] = $board->getBoardDescription();
                    //         $tmp_board['id'] = $board->getBoardId();

                    //         $tmp_room['boards'][] = $tmp_board;
                    //     }
                    // }

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


            $hotel['rates'] = collect($hotel['rates'])->sortBy('totalPrice');
        }


        return $hotel;
    }

    public function getHotel($hotelCode)
    {
        $hotel = DB::connection('hotels')->table('jumbo_hotels')
                            ->join("jumbo_categories", "jumbo_hotels.categoryCode", "=", "jumbo_categories.id")
                            ->select(["jumbo_hotels.*", "jumbo_categories.group as group"])
                            ->where('jumbo_hotels.id', $hotelCode)
                            ->first();
        if ($hotel) {
            $db_images = DB::connection('hotels')->table('jumbo_images')->select()
                ->where('jumbo_hotel_id', $hotel->id)->get();

            $images = [];
            foreach ($db_images as $image) {
                $images[] = [
                    'url' => $image->path,
                    'thumbnailUrl' => $image->path,
                ];
            }

            $starRating = $this->getStarRating($hotel->group ?? null);

            return [
                'code' => $hotelCode,
                'hotelDescription' => $hotel->description,
                'name' => $hotel->name,
                'address' => $hotel->address,
                'description' => $hotel->description,
                'starRating' => $starRating,
                'provider' => 'jumbo',
                'countryName' => $hotel->country,
                'telephone' => $hotel->telephone,
                'providerId' => 2,
                'city' => $hotel->city,
                'country' => $hotel->country,
                'images' => $images,
                'pictureUrl' => $images[0]['url'] ?? '',
            ];
        }

        return [
            'code' => $hotelCode,
            'hotelDescription' => '',
            'name' => '',
            'address' => [],
            'description' => '',
            'starRating' => '',
            'provider' => 'jumbo',
            'country' => '',
            'countryName' => '',
            'city' => '',
            'telephone' => '',
            'providerId' => '',
            'images' => [],
            'pictureUrl' => '',

        ];
    }

    public function confirmRooms($rooms, $checkIn, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId)
    {
        $paxes = 0;
        $occupancies = [];
        $i = 0;
        foreach ($rooms as $room) {
            $occupancy = new JumboHotels\RoomOccupancyRQV20($room['adults'], $room['children'], 1);
            $occupancy->setRatePlanCode($room['roomCode']);
            if ($room['children'] > 0) {
                $occupancy->setChildrenAges($room['childrenAges']);
            }
            $occupancies[] = $occupancy;

            $paxes += $room['adults'] + $room['children'];
            $i++;
        }

        $nationalities = array_fill(0, $paxes, $nationality);
        $paxNationalities = new JumboHotels\PaxNationalitiesRQ();
        $paxNationalities->setNationality($nationalities);

        $extended = new JumboHotels\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");

        $valuateQR = new JumboHotels\ValuationRQV22(true);
        $valuateQR->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $valuateQR->setBrandCode($this->JUMBO_BRAND_CODE);
        $valuateQR->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
        $valuateQR->setExtendedLogin($extended);
        $valuateQR->setLanguage('fr');
        $valuateQR->setCheckin($checkIn);
        $valuateQR->setCheckout($checkOut);
        $valuateQR->setEstablishmentId($hotelCode);
        $valuateQR->setOccupancies($occupancies);
        $valuateQR->setPaxNationalities($paxNationalities);

        $valuate = new JumboHotels\valuateExtendsV22();
        $valuate->setValuationRQV22_1($valuateQR);
        $service = new JumboHotels\HotelBookingHandlerService($this->soap_options);
        $response = $service->valuateExtendsV22($valuate);


        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/Valute/" . $generated_id . '_valute_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/Valute/" . $generated_id . '_valute_response.xml', $service->__getLastResponse());

        $results = $response->getResult();

        $hotel = $this->getHotel($hotelCode);

        $booking = [];
        $booking['currency'] = $results->getAmount()->getCurrencyCode();
        $booking['checkIn'] = $results->getCheckIn()->format('Y-m-d');
        $booking['checkOut'] = $results->getCheckOut()->format('Y-m-d');
        $totalPrice = $results->getAmount()->getValue();
        $booking['totalPrice'] = ceil(UtilityService::addPercentage(floatval($totalPrice), 'Jumbo'));
        $booking['totalPriceProvider'] = ceil($totalPrice);
//$booking['totalPrice'] = floatval($totalPrice);
        $booking['priceChanged'] = '';

        $booking['confirmedBooking'] = true;
        $booking['reservedBooking'] = '';
        $booking['confirmedPropertyCode'] = '';

        $booking['remarks'] = '';
        $booking['cancellationTerms'] = [];
        foreach ((array)$results->getOccupations() as $occ) {
            foreach ((array)$occ->getCancellationComments() as $cancellationTerm) {
                if ($cancellationTerm->getType() === 'Cancellation term') {
                    $text = $cancellationTerm->getText();
                    $matches = [];
                    preg_match('/^([0-9]+) - (.+)%$/', $text, $matches);

                    $tmp_checkIn = clone $checkIn;
                    $booking['cancellationTerms'][] = [
                        'type' => 'percentage',
                        'amount' => $matches[2],
                        'cancelTime' => $tmp_checkIn->subDays($matches[1]),
                    ];
                }
            }
            foreach ((array)$occ->getComments() as $comment) {
                if ($comment->getType() === 'ERRATA') {
                    $txt = $comment->getText() . '<br><br>';
                    $booking['remarks'] .= $txt;
                }
            }
        }

        $rooms = [];
        foreach ($results->getOccupations() as $occ) {
            $tmp_room = [];

            $tmp_room['roomCode'] = $occ->getRatePlanCode();
            $tmp_room['boardId'] = $occ->getBoardTypeCode();

            $tmp_room['price'] = UtilityService::addPercentage(floatval($occ->getAmount()->getValue()), 'Jumbo');
            //$tmp_room['price'] = $occ->getAmount()->getValue();
            $tmp_room['description'] = $occ->getDescription();
            $tmp_room['typeCode'] = $occ->getRoomTypeCode();
            $tmp_room['adults'] = $occ->getAdults();
            $tmp_room['children'] = $occ->getChildren();

            $rooms[] = $tmp_room;
        }

        return [
            'hotel' => $hotel,
            'booking' => $booking,
            'rooms' => $rooms,
            'occupancies' => $occupancies,
        ];
    }

    public function bookRooms(array $rooms, string $hotelCode = null, array $holder = null, array $params = null)
    {

        $checkIn = $params['checkIn'];
        $checkOut = $params['checkOut'];
        $nationality = $params['nationality'];

        $occupancies = [];
        $i = 0;

        foreach ($rooms as $room) {
            $children = 0;
            if (isset($room['children']))
                $children = $room['children'];
            $occupancy = new JumboHotels\RoomOccupancyRQV20($room['adults'], $children, 1);
            $occupancy->setRatePlanCode($room['roomCode']);

            if (isset($room['children'])) {
                if (intval($room['children']) > 0) {
                    $childrenAges = [];
                    foreach ($room['paxes'] as $pax) {
                        //age=$pax['age']
                        $age = Carbon::createFromFormat('Y-m-d', $pax['age'])->age;
                        if ($pax['type'] === 'child') {
                            $childrenAges[] =$age;
                        }
                    }
                    $occupancy->setChildrenAges($childrenAges);
                }
            }

            $occupancies[] = $occupancy;
            $i++;
        }

        $titular = $holder['firstName'] . ' ' . $holder['lastName'];

        $paxLists = [];
        $i = 0;

        // dd($rooms);
        foreach ($rooms as $room) {
            $paxList = [];
            foreach ($room['paxes'] as $pax) {
                $age = Carbon::createFromFormat('Y-m-d', $pax['age'])->age;
                $paxL = new JumboHotels\PaxRQ($age);
                $paxL->setName($pax['firstName'] . ' ' . $pax['lastName']);
                $paxL->setNationality($nationality);
                $paxList[] = $paxL;
            }
            $paxRQ = new JumboHotels\PaxListRQ();
            $paxRQ->setPax($paxList);
            $paxRQ->setRoomTypeCode($room['roomCode']);
            $paxLists[] = $paxRQ;
            $i++;

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
        $ConfirmRQV22->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $ConfirmRQV22->setBrandCode($this->JUMBO_BRAND_CODE);
        $ConfirmRQV22->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
        $ConfirmRQV22->setLanguage('fr');
        $ConfirmRQV22->setEstablishmentId($hotelCode);
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

        $service = new JumboHotels\HotelBookingHandlerService($this->soap_options);
        $response = $service->confirmExtendsV22($confirm);

        $generated_date = (new DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/confirmBook/" . $generated_id . '_confirmBooking_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".(new \DateTime())->format('Y-m-d')."/confirmBook/" . $generated_id . '_confirmBooking_response.xml', $service->__getLastResponse());

        $result = $response->getResult();

        $booking = [];
        $booking['bookingId'] = $result->getBasket()->getBasketId();
        $booking['confirmationNumber'] = $result->getServiceId(); // TODO temporary
        $booking['remarks'] = '';
        foreach ((array)$result->getComments() as $comment) {
            if ($comment->getType() === 'ERRATA') {
                $txt = $comment->getText() . '<br><br>';
                $booking['remarks'] .= $txt;
            }
        }
        $booking['checkIn'] = $result->getCheckin();
        $booking['checkOut'] = $result->getCheckout();
        $booking['price'] = ceil(UtilityService::addPercentage($result->getTotal()->getValue(),'Jumbo'));
        $booking['priceProvider'] = ceil(UtilityService::addPercentage($result->getTotal()->getValue(),'Jumbo'));
        $booking['currencyCode'] = $result->getTotal()->getCurrencyCode();
        $booking['status'] = $result->getStatus();
        $booking['confirmationNumber'] = ''; //$result->getConfirmationNumber();

        $booking['defaultCancelPolicy'] = ''; //$result->getCancelPoliciesInfos()->getDefaultPolicy();

        // TODO make this the same one as the one given if possible
        $rooms_save = [];
        foreach ((array)$result->getOccupations() as $key => $occ) {
            $tmp_room = [];
            $tmp_room['firstName'] = $rooms[$key]['paxes'][0]['firstName'];
            $tmp_room['lastName'] = $rooms[$key]['paxes'][0]['lastName'];
            $tmp_room['adultCount'] = $occ->getAdults();
            $tmp_room['childCount'] = $occ->getChildren();
            $tmp_room['board'] = $occ->getBoardTypeCode();
            $tmp_room['roomDescription'] = $occ->getDescription();
            $tmp_room['roomCode'] = $occ->getRatePlanCode();
            $rooms_save[] = $tmp_room;
        }

        $booking['rooms'] = $rooms_save;

        $booking['refundableTag'] = ''; //$result->getCancelPoliciesInfos()->getRefundableTag();
        $booking['cancellationPolicy'] = ''; //$result->getCancelPoliciesInfos()->getCancellationPolicies();

        $booking['cancellationPolicyInfos'] = [];
        foreach ((array)$result->getOccupations() as $occ) {
            foreach ((array)$occ->getCancellationComments() as $cancellationTerm) {
                if ($cancellationTerm->getType() === 'Cancellation term') {
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
        // foreach((array)$result->getCancelPoliciesInfos()->getCancelPolicyInfos() as $cancelPolicyInfo){
        //     $tmp_cpi['amount'] = $cancelPolicyInfo->getAmount();
        //     $tmp_cpi['cancelTime'] = $cancelPolicyInfo->getCancelTime();
        //     $tmp_cpi['type'] = $cancelPolicyInfo->getType();
        //     $tmp_cpi['cancellationPolicy'] = $cancelPolicyInfo->getCancellationPolicy();
        //     $booking['cancellationPolicyInfos'][] = $tmp_cpi;
        // }

        $confirmation = $this->confirmJumboBooking($booking['bookingId']);

        if (isset($confirmation['status']) && $confirmation['status'] === "CLOSED") {
            $booking['status'] = 'CONFIRMED';
        }

        return $booking;
    }

    public function cancelBooking(string $bookingId, ?string $reason)
    {
        $extended = new JumboBaskets\ExtendedLogin();
        $extended->setLoginCountry("MA");
        $extended->setMainNationality("MA");
        $extended->setChannel("B2B");

        $cancelRQ = new JumboBaskets\CancelRQV22();
        $cancelRQ->setBasketId($bookingId);
        $cancelRQ->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $cancelRQ->setBrandCode($this->JUMBO_BRAND_CODE);
        $cancelRQ->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
        $cancelRQ->setExtendedLogin($extended);

        $cancel = new JumboBaskets\cancelV22();
        $cancel->setCancelRQV22_1($cancelRQ);

        $service = new JumboBaskets\BasketHandlerService($this->soap_options);
        $response = $service->cancelV22($cancel);

        $generated_date = (new DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d')."/cancel/NanoPLUS.zampaktu." . $generated_date . "_CancelJumboBooking_request.xml", $service->__getlastrequest());
        Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d')."/cancel/NanoPLUS.zampaktu." . $generated_date . "_CancelJumboBooking_response.xml", $service->__getlastresponse());

        try {
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

    public function confirmJumboBooking($bookingId)
    {

        /*$confirmRQ = new JumboBaskets\ConfirmRQExtendsV22();
        $confirmRQ->setBasketId($bookingId);
        $confirmRQ->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $confirmRQ->setBrandCode($this->JUMBO_BRAND_CODE);
        $confirmRQ->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);

        $confirmF = new JumboBaskets\confirmBasketV22();
        $confirmF->setConfirmRQExtendsV22_1($confirmRQ);

        $service = new JumboBaskets\BasketHandlerService($this->soap_options);

        $response = $service->confirmBasketV22($confirmF);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;*/
        $confirmRQ = new JumboBaskets\ConfirmRQ();
        $confirmRQ->setBasketId($bookingId);
        $confirmRQ->setAgencyCode($this->JUMBO_AGENCY_CODE);
        $confirmRQ->setBrandCode($this->JUMBO_BRAND_CODE);
        $confirmRQ->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);

        $confirmF = new JumboBaskets\confirm();
        $confirmF->setConfirmRQ_1($confirmRQ);

        $service = new JumboBaskets\BasketHandlerService($this->soap_options);

        $response = $service->confirm($confirmF);


        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d') ."/basketConfirm/". $generated_id . '_confirmBasket_request.xml', $service->__getLastRequest());
        Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d') ."/basketConfirm/". $generated_id . '_confirmBasket_response.xml', $service->__getLastResponse());

        try {
            $result = $response->getResult();
        } catch (\Exception $ex) {
            $ex->report();
            return [];
        }

        return [
            'status' => $result->getStatus(),
        ];

    }

    public function getBookingDetails(string $bookingId)
    {

        /*  $extended = new JumboBaskets\ExtendedLogin();
          $extended->setLoginCountry("MA");
          $extended->setMainNationality("MA");
          $extended->setChannel("B2B");

          $GetBasketsRQV22_1=new JumboBaskets\GetBasketsRQV22(0,1);
          $GetBasketsRQV22_1->setAgencyCode($this->JUMBO_AGENCY_CODE);
          $GetBasketsRQV22_1->setBrandCode($this->JUMBO_BRAND_CODE);
          $GetBasketsRQV22_1->setPointOfSaleId($this->JUMBO_POINTOFSALE_ID);
          $GetBasketsRQV22_1->setBasketId($bookingId);
          $GetBasketsRQV22_1->setExtendedLogin($extended);
         // $GetBasketsRQV22_1->set;


          $basket=new JumboBaskets\getBasketsV22();
          $basket->setGetBasketsRQV22_1($GetBasketsRQV22_1);

          $service = new JumboBaskets\BasketHandlerService($this->soap_options);

          $response=$service->getBasketsV22($basket);

          $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
          $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

          Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d') ."/Getbasket/". $generated_id . '_confirmBasket_request.xml', $service->__getLastRequest());
          Storage::disk('local')->put("xml/jumbo/".(new DateTime())->format('Y-m-d') ."/Getbasket/". $generated_id . '_confirmBasket_response.xml', $service->__getLastResponse());

          try {
              $result = $response->getResult();
          } catch (\Exception $ex) {
              $ex->report();
              return [];
          }
          dd($response);
          return $response;*/
    }

    private function getStarRating($group)
    {
        switch ($group) {
            case "UNO":
                return 1;
            case "DOS":
                return 2;
            case "TRES":
                return 3;
            case "CUATRO":
                return 4;
            case "CINCO":
                return 5;
            case "VARIOS":
                return -1;
            default:
                return -1;
        }
    }

}
