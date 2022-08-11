<?php

namespace App\models\ATSFlight;

class FareComplexLeg extends RequestLegData
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var ArrayOfstring $FlightNumbers
     */
    protected $FlightNumbers = null;

    /**
     * @var string $LegNumber
     */
    protected $LegNumber = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \App\models\ATSFlight\FareComplexLeg
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFlightNumbers()
    {
      return $this->FlightNumbers;
    }

    /**
     * @param ArrayOfstring $FlightNumbers
     * @return \App\models\ATSFlight\FareComplexLeg
     */
    public function setFlightNumbers($FlightNumbers)
    {
      $this->FlightNumbers = $FlightNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegNumber()
    {
      return $this->LegNumber;
    }

    /**
     * @param string $LegNumber
     * @return \App\models\ATSFlight\FareComplexLeg
     */
    public function setLegNumber($LegNumber)
    {
      $this->LegNumber = $LegNumber;
      return $this;
    }

}
