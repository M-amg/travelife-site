<?php

namespace App\models\ATSFlight;

class SeatMapSegmentData extends SegmentData
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAvailString()
    {
      return $this->AvailString;
    }

    /**
     * @param string $AvailString
     * @return \App\models\ATSFlight\SeatMapSegmentData
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\SeatMapSegmentData
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

}
