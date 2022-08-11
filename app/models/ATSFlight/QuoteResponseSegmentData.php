<?php

namespace App\models\ATSFlight;

class QuoteResponseSegmentData
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $ArrivalDateTime
     */
    protected $ArrivalDateTime = null;

    /**
     * @var string $ArrivalTerminal
     */
    protected $ArrivalTerminal = null;

    /**
     * @var ArrayOfstring $BookingClasses
     */
    protected $BookingClasses = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $DepartureTerminal
     */
    protected $DepartureTerminal = null;

    /**
     * @var string $EquipmentCode
     */
    protected $EquipmentCode = null;

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
     * @var string $FreeBaggage
     */
    protected $FreeBaggage = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

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
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
    public function getArrivalTerminal()
    {
      return $this->ArrivalTerminal;
    }

    /**
     * @param string $ArrivalTerminal
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setArrivalTerminal($ArrivalTerminal)
    {
      $this->ArrivalTerminal = $ArrivalTerminal;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getBookingClasses()
    {
      return $this->BookingClasses;
    }

    /**
     * @param ArrayOfstring $BookingClasses
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setBookingClasses($BookingClasses)
    {
      $this->BookingClasses = $BookingClasses;
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeShare()
    {
      return $this->CodeShare;
    }

    /**
     * @param string $CodeShare
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
    public function getDepartureTerminal()
    {
      return $this->DepartureTerminal;
    }

    /**
     * @param string $DepartureTerminal
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setDepartureTerminal($DepartureTerminal)
    {
      $this->DepartureTerminal = $DepartureTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getEquipmentCode()
    {
      return $this->EquipmentCode;
    }

    /**
     * @param string $EquipmentCode
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setEquipmentCode($EquipmentCode)
    {
      $this->EquipmentCode = $EquipmentCode;
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeBaggage()
    {
      return $this->FreeBaggage;
    }

    /**
     * @param string $FreeBaggage
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setFreeBaggage($FreeBaggage)
    {
      $this->FreeBaggage = $FreeBaggage;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfStops()
    {
      return $this->NumberOfStops;
    }

    /**
     * @param int $NumberOfStops
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
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
     * @return \App\models\ATSFlight\QuoteResponseSegmentData
     */
    public function setSubFareType($SubFareType)
    {
      $this->SubFareType = $SubFareType;
      return $this;
    }

}
