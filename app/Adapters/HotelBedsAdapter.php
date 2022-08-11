<?php

namespace App\Adapters;

use App\models\HotelBeds\HotelBedsService;
use App\Services\CurrencyService;
use App\Services\UtilityService;
use Illuminate\Support\Facades\DB;
use Nexmo\Client\Exception\Exception;

class HotelBedsAdapter implements HotelProviderInterface
{
    public function getHotels(\DateTime $checkIn, \DateTime $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms,
                              $currency, $languageCode, $sessionId = null, $isMG = null){
        $service = new HotelBedsService();
        $response = $service->search($checkIn, $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode);
        // return an array of hotels according to our structure
        $hotels = [];

        if($response->hotels->total==0)
         return $hotels;

        $hotelbeds_hotels = $response->hotels->hotels;

        foreach($hotelbeds_hotels as $hotel){

            $rooms = $this->flatten($hotel->rooms);
            $rooms = $this->separate($rooms, $guestRooms);
            $combinations = $this->combine($rooms);

            // find lowest rate
            $minPrice = 99999999;
            foreach($combinations as $combination){
                $price = 0;
                foreach($combination as &$room){
                    $price += $room->rate->net;
                }
                if($price < $minPrice){
                    $minPrice = $price;
                }
            }

            $hotel_tmp['hotelName'] = $hotel->name;
            $hotel_tmp['code'] = $hotel->code;
            $hotel_tmp['starRating'] = $hotel->categoryCode[0];
            $hotel_tmp['provider'] = 'hotelbeds';
            $hotel_tmp['providerId'] = 3;

            $hotelRates_tmp = [];

            $providerCurrency = $hotel->currency;
            $converted = CurrencyService::convertCurrency(floatval($minPrice), $providerCurrency);
            $hotelRates_tmp['minRate'] = ceil(UtilityService::addPercentage($converted, 'Hotel Beds'));
            //$hotelRates_tmp['minRate'] = $converted;
            // TODO make this automatic somehow
            $hotelRates_tmp['currency'] = 'MAD';

            $hotel_tmp['hotelRates'] = $hotelRates_tmp;
            if ($isMG)
                $hotel_tmp['route'] = route('manage.api.hotel', ['code' => $hotel->code, 'p' => 3]);
            else
                $hotel_tmp['route'] = route('api.hotel', ['code' => $hotel->code, 'p' => 3]);

            $hotels[] = $hotel_tmp;
        }

        return $hotels;
    }

    public function getRooms($hotel_id, \DateTime $checkIn, \DateTime $checkOut, $guestRooms, $sessionId = null){
        $hotelCodes = [$hotel_id];
        $service = new HotelBedsService;
        $response = $service->search($checkIn, $checkOut, null, $hotelCodes, null, $guestRooms, null, null);

        $result = $response->hotels->hotels[0];

        $hotel['name'] = $result->name;
        $hotel['code'] = $result->code;
        $hotel['address'] = 'address';
        $hotel['city'] = 'city';
        $hotel['country'] = 'country';
        $hotel['starRating'] = $result->categoryCode[0];
        $hotel['longitude'] = $result->longitude;
        $hotel['latitude'] = $result->latitude;
        $hotel['checkIn'] = $checkIn;
        $hotel['checkOut'] = $checkOut;
        $hotel['provider'] = 'hotelbeds';
        $hotel['currency'] = $result->currency;

        $rooms = $this->flatten($result->rooms);
        $rooms = $this->separate($rooms, $guestRooms);
        $combinations = $this->combine($rooms);

        $hotel['rates'] = [];
        $hotel['rooms'] = [];
        foreach($combinations as $combination) {
            $tmp_rate = [];
            $tmp_rate['cancelPolicies'] = [];
            $totalPrice = 0;
            $room_nbr = 0;
            foreach($combination as $room) {
                ++$room_nbr;
                $rate = $room->rate;

                $totalPrice += $rate->net;

                $tmp_rate['rateCode'] = $rate->rateKey;

                switch ($rate->rateClass) {
                    case 'NOR':
                        $refund_tag = 'RFN';
                        break;
                    case 'NRF':
                        $refund_tag = 'NRFN';
                        break;

                    case 'NRP':
                        $refund_tag = 'NRFN';
                        break;

                    // case 'SPE':
                    //     $refund_tag = 'RFN';
                    //     break;

                    // case 'OFE':
                    //     $refund_tag = 'RFN';
                    //     break;

                    default:
                        $refund_tag = 'NRFN';
                        break;
                }

                // If one of the rooms is not refundable the whole combination is not
                if (!isset($tmp_rate['refund']) || $tmp_rate['refund'] !== 'NRFN') {
                    $tmp_rate['refund'] = $refund_tag;
                }

                $tmp_room = [];
                $tmp_room['description'] = $room->name;
                $tmp_room['roomCode'] = $rate->rateKey;
                $tmp_room['includedBoard']['boardId'] = $rate->boardCode;
                $tmp_room['includedBoard']['description'] = $rate->boardName;
                $tmp_room['typeCode'] = $rate->rateType;
                $tmp_room['adults'] = $rate->adults;
                $tmp_room['children'] = $rate->children;
                $converted = CurrencyService::convertCurrency(floatval($rate->net), $hotel['currency']);
                $tmp_room['price'] = ceil(UtilityService::addPercentage($converted, 'Hotel Beds'));
                //$tmp_room['price'] = $converted;
                $tmp_room['commentsId'] = $rate->rateCommentsId ?? '';
                $tmp_rate['rooms'][] = $tmp_room;

                try {
                    $policies = $rate->cancellationPolicies;
                    foreach((array)$policies as $policy){
                        $tmp_policy = [];
                        $tmp_policy['label'] = $room_nbr;
                        // $tmp_policy['amount'] = $policy->amount;
                        // because we know the type is always amount we can do this
                        $converted = CurrencyService::convertCurrency(floatval($policy->amount), $hotel['currency']);
                        $tmp_policy['amount'] = $converted;
                        $tmp_policy['cancelTime'] = $policy->from;
                        $tmp_policy['cancellationPolicy'] = '';
                        $tmp_policy['type'] = 'amount';
                        $tmp_rate['cancelPolicies'][] = $tmp_policy;
                    }
                }
                catch(\Exception $exception) {
                    $tmp_rate['refund'] = 'NRFN';
                }
            }

            $converted = CurrencyService::convertCurrency(doubleval($totalPrice), $hotel['currency']);
            $tmp_rate['totalPrice'] = ceil(UtilityService::addPercentage($converted, 'Hotel Beds'));
            //$tmp_rate['totalPrice'] =$converted;
            $hotel['rates'][] = $tmp_rate;

            $hotel['rates'] = collect($hotel['rates'])->sortBy('totalPrice');
        }
        // TODO make this dynamic somehow
        $hotel['currency'] = 'MAD';

        return $hotel;
    }

    public function getHotel($hotelCode)
    {
        $hotel = DB::connection('hotels')->table('hotelbeds_hotels')
            ->select()
            ->where('id', $hotelCode)
            ->first();
        $phone = DB::connection('hotels')->table('hotelbeds_phones')
            ->select()
            ->where('hotelbeds_hotel_id', $hotelCode)->where('type','PHONEBOOKING')
            ->first();
        if($hotel){
            $images = DB::connection('hotels')->table('hotelbeds_images')->select()
                ->where('hotelbeds_hotel_id', $hotel->id)->get();

            $hotel_images = [];
            if($images){
                foreach($images as $image){
                    $tmp_image = (array)$image;
                    $tmp_image['url'] = 'https://photos.hotelbeds.com/giata/bigger/'. $tmp_image['path'];
                    $tmp_image['thumbnailUrl'] = 'https://photos.hotelbeds.com/giata/small/'. $tmp_image['path'];
                    $hotel_images[] = $tmp_image;
                }
            }

            return [
                'code' => $hotelCode,
                'hotelDescription' => $hotel->description,
                'pictureUrl' => count($hotel_images) > 0 ? $hotel_images[0]['url'] : '',
                'images' => $hotel_images,
                'name' => $hotel->name,
                'address' => $hotel->address,
                'city' => $hotel->city,
                'country' => $hotel->countryCode,
                'countryName' => $hotel->countryCode,
                'telephone' => $phone->number,
                'description' => $hotel->description,
                'starRating' => ($hotel->s2c && strlen($hotel->s2c) > 1) ? $hotel->s2c[0] : 0,
                'provider' => 'hotelbeds',
                'providerId' => 3,
            ];
        }
        return [
            'code' => $hotelCode,
            'hotelDescription' => '',
            'pictureUrl' => '',
            'images' => [],
            'name' => '',
            'address' => '',
            'country' => '',
            'countryName' => '',
            'city' => '',
            'telephone' => '',
            'description' => '',
            'starRating' => '',
            'provider' => 'hotelbeds',
            'providerId' => 3,
        ];
    }

    public function confirmRooms($rooms, $checkIn = null, $checkOut = null, $hotelCode = null, $rateDetailCode = null, $nationality = null, $sessionId = null){
        $service = new HotelBedsService;

        // TODO this is just a test
        // $rooms[0]['typeCode'] = 'RECHECK';

        // initialize with empty comments array
        foreach($rooms as &$room){
            $room['comments'] = [];
        }
        unset($room);

        $rooms_to_recheck = [];
        $rest = [];
        foreach($rooms as $key => $room){
            if($room['typeCode'] === 'RECHECK'){
                $rooms_to_recheck[] = $room;
            } else {
                $rest[] = $room;
            }
        }

        $rooms = [];
        if(count($rooms_to_recheck) > 0){
            $response = $service->recheck($rooms_to_recheck);
            $hotel = $response->hotel;
            $hotel_rooms = $this->flatten($hotel->rooms);

            foreach((array) $hotel_rooms as $room) {
                $tmp_room = [];

                $tmp_room['roomCode'] = $room->rate->rateKey;
                $tmp_room['boardId'] = $room->rate->boardCode;
                $tmp_room['typeCode'] = $room->rate->rateType;
                $tmp_room['description'] = $room->name;
                $tmp_room['price'] = floatval($room->rate->net);
                $tmp_room['adults'] = $room->rate->adults;
                $tmp_room['children'] = $room->rate->children;
                // TODO check if this works
                $tmp_room["checkIn"] = $hotel->checkIn;
                $tmp_room["checkOut"] = $hotel->checkOut;
                $tmp_room['comments'] = [$room->rate->rateComments];

                $rooms[] = $tmp_room;
            }

            // Check if all rechecked rooms are bookable
            foreach($rooms as $room){
                if($room['typeCode'] !== 'BOOKABLE'){
                    throw (new Exception('One or more rechecked rates is not bookable'));
                }
            }
        }

        // get comments of not rechecked rooms
        foreach($rest as &$room) {
            if($room['commentsId']) {
                $comments = $service->getComments($room['commentsId'], $room['checkIn']);
                foreach($comments->rateComments as $comment) {
                    $room['comments'][] = $comment->description;
                }
            }
        }
        unset($room);

        $rooms = array_merge($rooms, $rest);

        // Sum the price of rechecked rates
        $price = 0;
        foreach((array) $rooms as $room){
            $price += $room['price'];
        }

        $booking = [];
        $booking['totalPrice'] = $price;

        return [
            'booking' => $booking,
            'rooms' => $rooms,
        ];

    }

    public function bookRooms(array $rooms, string $hotelCode = null, array $holder = null, array $params = null)
    {
        $hb_rooms = [];
        $c = 1;
        foreach($rooms as $room){
            $paxes = [];
            foreach($room['paxes'] as $pax){
                $tmp_pax = [
                    'roomId' => $c,
                    'name' => $pax['firstName'],
                    'surname' => $pax['lastName'],
                ];

                switch($pax['type']) {
                    case 'child':
                        $tmp_pax['type'] = 'CH';
                        break;
                    case 'adult':
                        $tmp_pax['type'] = 'AD';
                        break;
                }

                $paxes[] = $tmp_pax;
            }

            $hb_rooms[] = [
                'rateKey' => $room['roomCode'],
                'paxes' => $paxes,
            ];

        }

        // Hotelbeds holder is in the group of passengers
        $holder = [
            'name' => $rooms[0]['paxes'][0]['firstName'],
            'surname' => $rooms[0]['paxes'][0]['lastName'],
        ];

        // TODO make this an actual local reference of the booking
        $reference = 'bookingReference';

        $service = new HotelBedsService;
        $response = $service->book($hb_rooms, $holder, $reference);

        $result = $response->booking;

        $booking = [];
        $booking['bookingId'] = $result->reference;
        $booking['confirmationNumber'] = '';//$result->getServiceId(); // TODO temporary
        $booking['remarks'] = '';
        foreach((array)$result->hotel->rooms as $room){
            foreach((array) $room->rates as $rate){
                $txt = htmlspecialchars($rate->rateComments ?? '') . '<br>';
                $booking['remarks'] .= $txt;
            }
        }
        $booking['checkIn'] = $result->hotel->checkIn;
        $booking['checkOut'] = $result->hotel->checkOut;
        $converted = CurrencyService::convertCurrency(floatval($result->totalNet), $result->currency);
        $booking['price'] = ceil(UtilityService::addPercentage($converted, 'Hotel Beds'));
       // $booking['price'] = $converted;
        $booking['currencyCode'] = $result->currency;
        $booking['status'] = $result->status;
        $booking['confirmationNumber'] = ''; //$result->getConfirmationNumber();

        $booking['defaultCancelPolicy'] = ''; //$result->getCancelPoliciesInfos()->getDefaultPolicy();

        $supplier_name = $result->hotel->supplier->name;
        $supplier_vat = $result->hotel->supplier->vatNumber;
        $booking_reference = $result->reference;
        $booking['additionalInformation'] = "Payable through {$supplier_name}, acting as agent for the service operating company, details of which can be provided upon request. VAT: {$supplier_vat} Reference: {$booking_reference}";

        $rooms = [];
        foreach((array)$result->hotel->rooms as $room){
            $tmp_room = [];
            $tmp_room['paxes'] = [];
            foreach($room->paxes as $pax){
                $tmp_pax = [];
                $tmp_pax['firstName'] = $pax->name ?? '';
                $tmp_pax['lastName'] = $pax->name ?? '';
                $tmp_pax['age'] = $pax->age ?? 40;
                $tmp_pax['type'] = $pax->type ?? '';
                $tmp_room['paxes'][] = $tmp_pax;
            }
            $tmp_room['firstName'] = $room->paxes[0]->name;
            $tmp_room['lastName'] = $room->paxes[0]->surname;
            $tmp_room['adultCount'] = $room->rates[0]->adults;
            $tmp_room['childCount'] = $room->rates[0]->children;
            $tmp_room['board'] = $room->rates[0]->boardCode;
            $tmp_room['roomDescription'] = $room->name;
            $rooms[] = $tmp_room;
        }

        $booking['rooms'] = $rooms;

        $booking['refundableTag'] = ''; //$result->getCancelPoliciesInfos()->getRefundableTag();
        $booking['cancellationPolicy'] = ''; //$result->getCancelPoliciesInfos()->getCancellationPolicies();

        $booking['cancellationPolicyInfos'] = [];
        $room_id = 0;
        foreach((array) $result->hotel->rooms as $room) {
            ++$room_id;
            foreach((array) $room->rates as $rate){
                foreach((array) $rate->cancellationPolicies as $policy){
                        // because we know the type is always amount we can do this
                        $converted = CurrencyService::convertCurrency(floatval($policy->amount), $result->currency);
                        $booking['cancellationPolicyInfos'][] = [
                            'label' => $room_id,
                            'type' => 'amount',
                            'amount' => $converted,
                            'cancelTime' => $policy->from,
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

        return $booking;
    }

    public function cancelBooking(string $bookingId, ?string $reason) {
        $service = new HotelBedsService;
        $response = $service->cancelBooking($bookingId, $reason );
        $booking = $response->booking;

        return [
            'status' => $booking->status,
            'cancellationAmount' => $booking->pendingAmount,
            'refundAmount' => $booking->totalNet - $booking->pendingAmount,
        ];
    }

    private function flatten($rooms){
        $flattened_rooms = [];
        foreach($rooms as $room){
            foreach($room->rates as $rate){
                $room_tmp = clone $room;
                $room_tmp->rate = $rate;
                unset($room_tmp->rates);
                $flattened_rooms[] = $room_tmp;
            }
        }
        return $flattened_rooms;
    }

    private function separate($rooms, $types){
        $rooms_types = [];
        foreach($types as $type){
            $rooms_type_tmp = [];
            foreach($rooms as $room){
                if($room->rate->adults == $type['adults'] && $room->rate->children == $type['children']){
                    $rooms_type_tmp[] = $room;
                }
            }
            $rooms_types[] = $rooms_type_tmp;
        }
        return $rooms_types;
    }

    private function createCombinations($rooms, &$combinations, $depth, $current){
        if($depth >= count($rooms)){
            $combinations[] = $current;
            return;
        }

        for($i=0; $i < count($rooms[$depth]); ++$i){
            $this->createCombinations($rooms, $combinations, $depth + 1, array_merge($current, [$rooms[$depth][$i]]));
        }
    }

    private function combine($rooms){

        $combinations = [];
        $this->createCombinations($rooms, $combinations, 0, []);

        return $combinations;
    }

    public function getBookingDetails(string $bookingId)
    {
        // TODO: Implement getBookingDetails() method.
    }
}
