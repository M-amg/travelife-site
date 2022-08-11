<?php

namespace App\models\ATSFlight;

class CommonSegmentData
{

    /**
     * @var AllotmentResponse $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $ArrivalDateTime
     */
    protected $ArrivalDateTime = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var string $SegmentStatus
     */
    protected $SegmentStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AllotmentResponse
     */
    public function getAllotmentConfig()
    {
      return $this->AllotmentConfig;
    }

    /**
     * @param AllotmentResponse $AllotmentConfig
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setAllotmentConfig($AllotmentConfig)
    {
      $this->AllotmentConfig = $AllotmentConfig;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
      if ($this->ArrivalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDateTime
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setArrivalDateTime(\DateTime $ArrivalDateTime = null)
    {
      if ($ArrivalDateTime == null) {
       $this->ArrivalDateTime = null;
      } else {
        $this->ArrivalDateTime = $ArrivalDateTime->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
      if ($this->DepartureDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDateTime
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setDepartureDateTime(\DateTime $DepartureDateTime = null)
    {
      if ($DepartureDateTime == null) {
       $this->DepartureDateTime = null;
      } else {
        $this->DepartureDateTime = $DepartureDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param string $FlightNumber
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentStatus()
    {
      return $this->SegmentStatus;
    }

    /**
     * @param string $SegmentStatus
     * @return \App\models\ATSFlight\CommonSegmentData
     */
    public function setSegmentStatus($SegmentStatus)
    {
      $this->SegmentStatus = $SegmentStatus;
      return $this;
    }

}
