<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlPassenger extends Model
{
    public function fareBooks()
    {
        return $this->belongsToMany('App\models\bookFlightAPI\FareBook')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility', 'passengerNumber')
            ->withTimestamps();
    }

    public function tlBookHotels()
    {
        return $this->belongsToMany('App\models\book\bookHotel\TlBookHotel')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }

    public function tlBookRooms()
    {
        return $this->belongsToMany('App\models\book\bookHotel\TlBookRoom')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }

    public function apiHotelBooks()
    {
        return $this->belongsToMany('App\models\bookHotelApi\ApiHotelBook')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility', 'room', 'roomCode')
            ->withTimestamps();
    }

    public function tlBookPackages()
    {
        return $this->belongsToMany('App\models\book\bookPackage\TlBookPackage', 'tl_book_package_passengers', 'tl_passenger_id', 'tl_book_package_id');
    }
    public function tlRates()
    {
        return $this->belongsToMany('App\models\hotel\TlRate', 'tl_book_hotel_rate_passengers', 'tl_passenger_id', 'tl_rate_id');
    }
    public function tlLodgings()
    {
        return $this->belongsToMany('App\models\package\TlLodging', 'tl_book_package_lodging_passengers', 'tl_passenger_id', 'tl_lodging_id');
    }

    public function tlFormulaBooks()
    {
        return $this->belongsToMany('App\models\package\formula\TlFormulaBook')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }

    public function tlCommandLines()
    {
        return $this->belongsToMany('App\models\book\TlPassenger', 'tl_command_line_passenger', 'tl_passenger_id', 'tl_command_line_id');
    }

    public function attachFareBook($id, $passengerNumber = null)
    {
        $data = array_merge($this->getData(), ['passengerNumber' => $passengerNumber]);
        $this->fareBooks()->attach($id, $data);
    }

    public function attachBookHotel($id, array $data = [])
    {
        $data = array_merge($this->getData(), $data);
        $this->tlBookHotels()->attach($id, $data);
    }

    public function attachBookRoom($id, array $data = [])
    {
        $data = array_merge($this->getData(), $data);
        $this->tlBookRooms()->attach($id, $data);
    }

    public function attachApiHotelBook($id, array $data = [])
    {
        $data = array_merge($this->getData(), $data);
        $this->apiHotelBooks()->attach($id, $data);
    }

    public function attachFormulaBook($id, array $data = [])
    {
        $data = array_merge($this->getData(), $data);
        $this->tlFormulaBooks()->attach($id, $data);
    }

    public function getData()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'civility' => $this->civility,
            'gender' => $this->gender,
            'type' => $this->type,
            'passport' => $this->passport,
            'dob' => $this->dob,
        ];
    }
}
