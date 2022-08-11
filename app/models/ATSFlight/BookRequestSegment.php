<?php

namespace App\models\ATSFlight;

class BookRequestSegment
{

    /**
     * @var string $AirlineFilekey
     */
    protected $AirlineFilekey = null;

    /**
     * @var AllotmentRequest $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var AllotmentResponse $AllotmentData
     */
    protected $AllotmentData = null;

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
     * @var string $BrandCode
     */
    protected $BrandCode = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

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
     * @var GDSFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var SegmentStatusEnum $SegmentStatus
     */
    protected $SegmentStatus = null;

    /**
     * @var GDSSubFareTypeEnum $SubFareType
     */
    protected $SubFareType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirlineFilekey()
    {
      return $this->AirlineFilekey;
    }

    /**
     * @param string $AirlineFilekey
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setAirlineFilekey($AirlineFilekey)
    {
      $this->AirlineFilekey = $AirlineFilekey;
      return $this;
    }

    /**
     * @return AllotmentRequest
     */
    public function getAllotmentConfig()
    {
      return $this->AllotmentConfig;
    }

    /**
     * @param AllotmentRequest $AllotmentConfig
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setAllotmentConfig($AllotmentConfig)
    {
      $this->AllotmentConfig = $AllotmentConfig;
      return $this;
    }

    /**
     * @return AllotmentResponse
     */
    public function getAllotmentData()
    {
      return $this->AllotmentData;
    }

    /**
     * @param AllotmentResponse $AllotmentData
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setAllotmentData($AllotmentData)
    {
      $this->AllotmentData = $AllotmentData;
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
     * @return \App\models\ATSFlight\BookRequestSegment
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
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setArrivalDateTime(\DateTime $ArrivalDateTime = null)
    {
      if ($ArrivalDateTime == null) {
       $this->ArrivalDateTime = null;
      } else {
        $this->ArrivalDateTime = $ArrivalDateTime->format("Y-m-d\TH:i:s");
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
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandCode()
    {
      return $this->BrandCode;
    }

    /**
     * @param string $BrandCode
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setBrandCode($BrandCode)
    {
      $this->BrandCode = $BrandCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
      return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
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
     * @return \App\models\ATSFlight\BookRequestSegment
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
     * @return \App\models\ATSFlight\BookRequestSegment
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
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setDepartureDateTime(\DateTime $DepartureDateTime = null)
    {
      if ($DepartureDateTime == null) {
       $this->DepartureDateTime = null;
      } else {
        $this->DepartureDateTime = $DepartureDateTime->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return GDSFareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param GDSFareTypeEnum $FareType
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFarebase()
    {
      return $this->Farebase;
    }

    /**
     * @param string $Farebase
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
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
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return SegmentStatusEnum
     */
    public function getSegmentStatus()
    {
      return $this->SegmentStatus;
    }

    /**
     * @param SegmentStatusEnum $SegmentStatus
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setSegmentStatus($SegmentStatus)
    {
      $this->SegmentStatus = $SegmentStatus;
      return $this;
    }

    /**
     * @return GDSSubFareTypeEnum
     */
    public function getSubFareType()
    {
      return $this->SubFareType;
    }

    /**
     * @param GDSSubFareTypeEnum $SubFareType
     * @return \App\models\ATSFlight\BookRequestSegment
     */
    public function setSubFareType($SubFareType)
    {
      $this->SubFareType = $SubFareType;
      return $this;
    }

}
