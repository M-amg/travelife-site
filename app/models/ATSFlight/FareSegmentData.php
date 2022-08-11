<?php

namespace App\models\ATSFlight;

class FareSegmentData extends SegmentData
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

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
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var string $EquipmentCode
     */
    protected $EquipmentCode = null;

    /**
     * @var string $EquipmentName
     */
    protected $EquipmentName = null;

    /**
     * @var string $FreeBaggageAllowance
     */
    protected $FreeBaggageAllowance = null;

    /**
     * @var int $FreeSeats
     */
    protected $FreeSeats = null;

    /**
     * @var ArrayOfstring $IncludedServiceIDs
     */
    protected $IncludedServiceIDs = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

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
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setEquipmentName($EquipmentName)
    {
      $this->EquipmentName = $EquipmentName;
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setFreeBaggageAllowance($FreeBaggageAllowance)
    {
      $this->FreeBaggageAllowance = $FreeBaggageAllowance;
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setIncludedServiceIDs($IncludedServiceIDs)
    {
      $this->IncludedServiceIDs = $IncludedServiceIDs;
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setSubFareType($SubFareType)
    {
      $this->SubFareType = $SubFareType;
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
     * @return \App\models\ATSFlight\FareSegmentData
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
