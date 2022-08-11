<?php

namespace App\models\ATSFlight;

class FareResponseSegment
{

    /**
     * @var AllotmentResponse $Allotment
     */
    protected $Allotment = null;

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
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var ClassTypeEnum $CabinClassName
     */
    protected $CabinClassName = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var ArrayOfFareResponseDatePair $DatePairs
     */
    protected $DatePairs = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $EquipmentCode
     */
    protected $EquipmentCode = null;

    /**
     * @var string $EquipmentName
     */
    protected $EquipmentName = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var GDSFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var string $FreeBaggageAllowance
     */
    protected $FreeBaggageAllowance = null;

    /**
     * @var FreeBaggageAllowanceDetails $FreeBaggageAllowanceDetails
     */
    protected $FreeBaggageAllowanceDetails = null;

    /**
     * @var int $FreeSeats
     */
    protected $FreeSeats = null;

    /**
     * @var ArrayOfstring $IncludedServiceIDs
     */
    protected $IncludedServiceIDs = null;

    /**
     * @var boolean $MCTExceeded
     */
    protected $MCTExceeded = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

    /**
     * @var boolean $SecuredFlight
     */
    protected $SecuredFlight = null;

    /**
     * @var string $SegmentID
     */
    protected $SegmentID = null;

    /**
     * @var int $SegmentMileage
     */
    protected $SegmentMileage = null;

    /**
     * @var GDSSubFareTypeEnum $SubFareType
     */
    protected $SubFareType = null;

    /**
     * @var SharedPrice $Surcharge
     */
    protected $Surcharge = null;

    /**
     * @var int $TotalSeats
     */
    protected $TotalSeats = null;

    /**
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AllotmentResponse
     */
    public function getAllotment()
    {
      return $this->Allotment;
    }

    /**
     * @param AllotmentResponse $Allotment
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setAllotment($Allotment)
    {
      $this->Allotment = $Allotment;
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setCabinClassName($CabinClassName)
    {
      $this->CabinClassName = $CabinClassName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseDatePair
     */
    public function getDatePairs()
    {
      return $this->DatePairs;
    }

    /**
     * @param ArrayOfFareResponseDatePair $DatePairs
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setDatePairs($DatePairs)
    {
      $this->DatePairs = $DatePairs;
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
    public function getEquipmentCode()
    {
      return $this->EquipmentCode;
    }

    /**
     * @param string $EquipmentCode
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setEquipmentName($EquipmentName)
    {
      $this->EquipmentName = $EquipmentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeBaggageAllowance()
    {
      return $this->FreeBaggageAllowance;
    }

    /**
     * @param string $FreeBaggageAllowance
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setFreeBaggageAllowance($FreeBaggageAllowance)
    {
      $this->FreeBaggageAllowance = $FreeBaggageAllowance;
      return $this;
    }

    /**
     * @return FreeBaggageAllowanceDetails
     */
    public function getFreeBaggageAllowanceDetails()
    {
      return $this->FreeBaggageAllowanceDetails;
    }

    /**
     * @param FreeBaggageAllowanceDetails $FreeBaggageAllowanceDetails
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setFreeBaggageAllowanceDetails($FreeBaggageAllowanceDetails)
    {
      $this->FreeBaggageAllowanceDetails = $FreeBaggageAllowanceDetails;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setFreeSeats($FreeSeats)
    {
      $this->FreeSeats = $FreeSeats;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getIncludedServiceIDs()
    {
      return $this->IncludedServiceIDs;
    }

    /**
     * @param ArrayOfstring $IncludedServiceIDs
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setIncludedServiceIDs($IncludedServiceIDs)
    {
      $this->IncludedServiceIDs = $IncludedServiceIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMCTExceeded()
    {
      return $this->MCTExceeded;
    }

    /**
     * @param boolean $MCTExceeded
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setMCTExceeded($MCTExceeded)
    {
      $this->MCTExceeded = $MCTExceeded;
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
     * @return \App\models\ATSFlight\FareResponseSegment
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecuredFlight()
    {
      return $this->SecuredFlight;
    }

    /**
     * @param boolean $SecuredFlight
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setSecuredFlight($SecuredFlight)
    {
      $this->SecuredFlight = $SecuredFlight;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentID()
    {
      return $this->SegmentID;
    }

    /**
     * @param string $SegmentID
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setSegmentID($SegmentID)
    {
      $this->SegmentID = $SegmentID;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setSegmentMileage($SegmentMileage)
    {
      $this->SegmentMileage = $SegmentMileage;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setSubFareType($SubFareType)
    {
      $this->SubFareType = $SubFareType;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalSeats()
    {
      return $this->TotalSeats;
    }

    /**
     * @param int $TotalSeats
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setTotalSeats($TotalSeats)
    {
      $this->TotalSeats = $TotalSeats;
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
     * @return \App\models\ATSFlight\FareResponseSegment
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
