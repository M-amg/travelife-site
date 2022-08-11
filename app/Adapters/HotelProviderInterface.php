<?php

namespace App\Adapters;

interface HotelProviderInterface
{
    public function getHotels(\DateTime $checkIn, \DateTime $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode, $sessionId,$isMG=null);

    public function getRooms($hotel_id, \DateTime $checkIn, \DateTime $checkOut, $guestRooms, $sessionId);

    public function getHotel($hotelCode);

    public function confirmRooms($rooms, $checkIn, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId);

    public function bookRooms(array $rooms, string $hotelCode = null, array $holder = null, array $params = null);

    public function cancelBooking(string $bookingId, ?string $reason);

    public function getBookingDetails(string $bookingId);
}
