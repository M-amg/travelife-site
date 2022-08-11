<?php

namespace App\models\ATSFlight;

class QuoteRequestSegment
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

    /**
     * @var string $AllotmentMatchCode
     */
    protected $AllotmentMatchCode = null;

    /**
     * @var AllotmentTypeEnum $AllotmentType
     */
    protected $AllotmentType = null;

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var duration $ArrivalTime
     */
    protected $ArrivalTime = null;

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
     * @var ClassTypeEnum $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var string $CodeShareCarrier
     */
    protected $CodeShareCarrier = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var duration $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var string $EquipmentCode
     */
    protected $EquipmentCode = null;

    /**
     * @var GDSFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var ArrayOfQuoteRequestFarebase $PubFarebasis
     */
    protected $PubFarebasis = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirline()
    {
      return $this->Airline;
    }

    /**
     * @param string $Airline
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllotmentMatchCode()
    {
      return $this->AllotmentMatchCode;
    }

    /**
     * @param string $AllotmentMatchCode
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setAllotmentMatchCode($AllotmentMatchCode)
    {
      $this->AllotmentMatchCode = $AllotmentMatchCode;
      return $this;
    }

    /**
     * @return AllotmentTypeEnum
     */
    public function getAllotmentType()
    {
      return $this->AllotmentType;
    }

    /**
     * @param AllotmentTypeEnum $AllotmentType
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setAllotmentType($AllotmentType)
    {
      $this->AllotmentType = $AllotmentType;
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
      if ($this->ArrivalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setArrivalDate(\DateTime $ArrivalDate = null)
    {
      if ($ArrivalDate == null) {
       $this->ArrivalDate = null;
      } else {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return duration
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param duration $ArrivalTime
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param ClassTypeEnum $CabinClass
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeShareCarrier()
    {
      return $this->CodeShareCarrier;
    }

    /**
     * @param string $CodeShareCarrier
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setCodeShareCarrier($CodeShareCarrier)
    {
      $this->CodeShareCarrier = $CodeShareCarrier;
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setDepartureDate(\DateTime $DepartureDate = null)
    {
      if ($DepartureDate == null) {
       $this->DepartureDate = null;
      } else {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return duration
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param duration $DepartureTime
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
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
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return ArrayOfQuoteRequestFarebase
     */
    public function getPubFarebasis()
    {
      return $this->PubFarebasis;
    }

    /**
     * @param ArrayOfQuoteRequestFarebase $PubFarebasis
     * @return \App\models\ATSFlight\QuoteRequestSegment
     */
    public function setPubFarebasis($PubFarebasis)
    {
      $this->PubFarebasis = $PubFarebasis;
      return $this;
    }

}
