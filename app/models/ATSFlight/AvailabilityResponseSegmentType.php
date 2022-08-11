<?php

namespace App\models\ATSFlight;

class AvailabilityResponseSegmentType
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

    /**
     * @var AllotmentResponse $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var string $ArrivalTerminal
     */
    protected $ArrivalTerminal = null;

    /**
     * @var duration $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var ClassTypeEnum $CabinClassName
     */
    protected $CabinClassName = null;

    /**
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var ArrayOfAvailabilityResponseDatePair $DatePair
     */
    protected $DatePair = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $DepartureTerminal
     */
    protected $DepartureTerminal = null;

    /**
     * @var duration $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var string $EquipmentCode
     */
    protected $EquipmentCode = null;

    /**
     * @var string $EquipmentName
     */
    protected $EquipmentName = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var int $FreeSeats
     */
    protected $FreeSeats = null;

    /**
     * @var string $LegEquipmentName
     */
    protected $LegEquipmentName = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

    /**
     * @var ArrayOfBookingClasses $SegmentBookingClasses
     */
    protected $SegmentBookingClasses = null;

    /**
     * @var int $SegmentMileage
     */
    protected $SegmentMileage = null;

    /**
     * @var SharedPrice $Surcharge
     */
    protected $Surcharge = null;

    /**
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
      return $this;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return string
     */
    public function getArrivalTerminal()
    {
      return $this->ArrivalTerminal;
    }

    /**
     * @param string $ArrivalTerminal
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setArrivalTerminal($ArrivalTerminal)
    {
      $this->ArrivalTerminal = $ArrivalTerminal;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClassName()
    {
      return $this->CabinClassName;
    }

    /**
     * @param ClassTypeEnum $CabinClassName
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setCabinClassName($CabinClassName)
    {
      $this->CabinClassName = $CabinClassName;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityResponseDatePair
     */
    public function getDatePair()
    {
      return $this->DatePair;
    }

    /**
     * @param ArrayOfAvailabilityResponseDatePair $DatePair
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setDatePair($DatePair)
    {
      $this->DatePair = $DatePair;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return string
     */
    public function getDepartureTerminal()
    {
      return $this->DepartureTerminal;
    }

    /**
     * @param string $DepartureTerminal
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setDepartureTerminal($DepartureTerminal)
    {
      $this->DepartureTerminal = $DepartureTerminal;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setEquipmentCode($EquipmentCode)
    {
      $this->EquipmentCode = $EquipmentCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEquipmentName()
    {
      return $this->EquipmentName;
    }

    /**
     * @param string $EquipmentName
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setEquipmentName($EquipmentName)
    {
      $this->EquipmentName = $EquipmentName;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getFreeSeats()
    {
      return $this->FreeSeats;
    }

    /**
     * @param int $FreeSeats
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setFreeSeats($FreeSeats)
    {
      $this->FreeSeats = $FreeSeats;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegEquipmentName()
    {
      return $this->LegEquipmentName;
    }

    /**
     * @param string $LegEquipmentName
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setLegEquipmentName($LegEquipmentName)
    {
      $this->LegEquipmentName = $LegEquipmentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMealCode()
    {
      return $this->MealCode;
    }

    /**
     * @param string $MealCode
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setMealCode($MealCode)
    {
      $this->MealCode = $MealCode;
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
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
      return $this;
    }

    /**
     * @return ArrayOfBookingClasses
     */
    public function getSegmentBookingClasses()
    {
      return $this->SegmentBookingClasses;
    }

    /**
     * @param ArrayOfBookingClasses $SegmentBookingClasses
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setSegmentBookingClasses($SegmentBookingClasses)
    {
      $this->SegmentBookingClasses = $SegmentBookingClasses;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentMileage()
    {
      return $this->SegmentMileage;
    }

    /**
     * @param int $SegmentMileage
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setSegmentMileage($SegmentMileage)
    {
      $this->SegmentMileage = $SegmentMileage;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param SharedPrice $Surcharge
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTravelTime()
    {
      return $this->TravelTime;
    }

    /**
     * @param duration $TravelTime
     * @return \App\models\ATSFlight\AvailabilityResponseSegmentType
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
