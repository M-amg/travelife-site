<?php

namespace App\models\bookHotelApi;

use App\Adapters\HotelBedsAdapter;
use App\Adapters\JumboAdapter;
use App\Services\HotelServiceII;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ApiHotelBook extends Model
{
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility', 'room', 'roomCode')
            ->withTimestamps();

    }
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function rooms() {
        return $this->hasMany('App\models\bookHotelApi\BookingRoomApi');
    }
    public function tlPayment(){
        return $this->belongsTo('App\models\TlPayment');
    }
    public function cancelPoliciesInfos() {
        return $this->hasMany('App\models\bookHotelApi\CancelPolicyInfoApi');
    }
    public function tlRules(){
        return $this->belongsToMany('App\models\book\TlRule','tl_rule_hotel_api_books','hotel_book_id','tl_rule_id');
    }

    public function finishBooking()
    {
        $rooms = [];
        foreach ($this->rooms as $r) {
            $paxes = [];
            foreach ($r->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;

                if (empty($passenger->dob)) {
                    $dob = Carbon::now()->subYear(30);
                } else {
                    $dob = Carbon::createFromFormat('Y-m-d', $passenger->dob);
                }

                $paxes[] = [
                    'firstName' => $passenger->firstName,
                    'lastName' => $passenger->lastName,
                    'dob' => $dob->format('Y-m-d'),
                    'age' => $dob->age,
                    'type' => $passenger->type,
                ];
            }

            $rooms[] = [
                'adults' => $r->adultCount,
                'children' => $r->childCount,
                'roomCode' => $r->roomCode,
                'typeCode' => $r->typeCode,
                'paxes' => $paxes,
            ];
        }

        if ($this->provider == "jumbo") {
            $adapter = new JumboAdapter();
        } else {
            $adapter = new HotelBedsAdapter();
        }

        $holder['firstName'] = $this->tlCustomer()->first()->firstName;
        $holder['lastName'] = $this->tlCustomer()->first()->lastName;
        $params['checkIn'] = Carbon::createFromFormat("Y-m-d", $this->checkIn);
        $params['checkOut'] = Carbon::createFromFormat("Y-m-d", $this->checkOut);
        $params['nationality'] = "MA";

        $hotelService = new HotelServiceII($adapter);
        $booking_result = $hotelService->bookRooms($rooms, $this->hotelCode, $holder, $params);

        $this->bookingId = $booking_result['bookingId'];
        $this->confirmationNumber = $booking_result['confirmationNumber'];
        $this->status = 1;
        $this->save();
    }
}
