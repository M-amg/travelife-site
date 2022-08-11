<?php

namespace App\models\ATSFlight;

class PNRResponseSegment
{

    /**
     * @var string $AirlineCode
     */
    protected $AirlineCode = null;

    /**
     * @var string $AirlineRecordLocator
     */
    protected $AirlineRecordLocator = null;

    /**
     * @var AllotmentResponse $Allotment
     */
    protected $Allotment = null;

    /**
     * @var string $AllotmentID
     */
    protected $AllotmentID = null;

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var SegmentStatusEnum $BookStatus
     */
    protected $BookStatus = null;

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
     * @var \DateTime $CheckInTime
     */
    protected $CheckInTime = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $EquipmentName
     */
    protected $EquipmentName = null;

    /**
     * @var string $FareTimeLimit
     */
    protected $FareTimeLimit = null;

    /**
     * @var GDSFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var ArrayOfstring $IncludedServiceIDs
     */
    protected $IncludedServiceIDs = null;

    /**
     * @var boolean $IsAllotment
     */
    protected $IsAllotment = null;

    /**
     * @var boolean $IsElectronicTicketingPermitted
     */
    protected $IsElectronicTicketingPermitted = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var string $OperatingCarrier
     */
    protected $OperatingCarrier = null;

    /**
     * @var string $OperatingCarrierCode
     */
    protected $OperatingCarrierCode = null;

    /**
     * @var int $OriginalSegmentNumber
     */
    protected $OriginalSegmentNumber = null;

    /**
     * @var int $SegmentNumber
     */
    protected $SegmentNumber = null;

    /**
     * @var string $SegmentStatus
     */
    protected $SegmentStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirlineCode()
    {
      return $this->AirlineCode;
    }

    /**
     * @param string $AirlineCode
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setAirlineCode($AirlineCode)
    {
      $this->AirlineCode = $AirlineCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirlineRecordLocator()
    {
      return $this->AirlineRecordLocator;
    }

    /**
     * @param string $AirlineRecordLocator
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setAirlineRecordLocator($AirlineRecordLocator)
    {
      $this->AirlineRecordLocator = $AirlineRecordLocator;
      return $this;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setAllotment($Allotment)
    {
      $this->Allotment = $Allotment;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllotmentID()
    {
      return $this->AllotmentID;
    }

    /**
     * @param string $AllotmentID
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setAllotmentID($AllotmentID)
    {
      $this->AllotmentID = $AllotmentID;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return SegmentStatusEnum
     */
    public function getBookStatus()
    {
      return $this->BookStatus;
    }

    /**
     * @param SegmentStatusEnum $BookStatus
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setBookStatus($BookStatus)
    {
      $this->BookStatus = $BookStatus;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckInTime()
    {
      if ($this->CheckInTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CheckInTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CheckInTime
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setCheckInTime(\DateTime $CheckInTime = null)
    {
      if ($CheckInTime == null) {
       $this->CheckInTime = null;
      } else {
        $this->CheckInTime = $CheckInTime->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
    public function getEquipmentName()
    {
      return $this->EquipmentName;
    }

    /**
     * @param string $EquipmentName
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setEquipmentName($EquipmentName)
    {
      $this->EquipmentName = $EquipmentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareTimeLimit()
    {
      return $this->FareTimeLimit;
    }

    /**
     * @param string $FareTimeLimit
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setFareTimeLimit($FareTimeLimit)
    {
      $this->FareTimeLimit = $FareTimeLimit;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setIncludedServiceIDs($IncludedServiceIDs)
    {
      $this->IncludedServiceIDs = $IncludedServiceIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllotment()
    {
      return $this->IsAllotment;
    }

    /**
     * @param boolean $IsAllotment
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setIsAllotment($IsAllotment)
    {
      $this->IsAllotment = $IsAllotment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsElectronicTicketingPermitted()
    {
      return $this->IsElectronicTicketingPermitted;
    }

    /**
     * @param boolean $IsElectronicTicketingPermitted
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setIsElectronicTicketingPermitted($IsElectronicTicketingPermitted)
    {
      $this->IsElectronicTicketingPermitted = $IsElectronicTicketingPermitted;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setMealCode($MealCode)
    {
      $this->MealCode = $MealCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatingCarrier()
    {
      return $this->OperatingCarrier;
    }

    /**
     * @param string $OperatingCarrier
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setOperatingCarrier($OperatingCarrier)
    {
      $this->OperatingCarrier = $OperatingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatingCarrierCode()
    {
      return $this->OperatingCarrierCode;
    }

    /**
     * @param string $OperatingCarrierCode
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setOperatingCarrierCode($OperatingCarrierCode)
    {
      $this->OperatingCarrierCode = $OperatingCarrierCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginalSegmentNumber()
    {
      return $this->OriginalSegmentNumber;
    }

    /**
     * @param int $OriginalSegmentNumber
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setOriginalSegmentNumber($OriginalSegmentNumber)
    {
      $this->OriginalSegmentNumber = $OriginalSegmentNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param int $SegmentNumber
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
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
     * @return \App\models\ATSFlight\PNRResponseSegment
     */
    public function setSegmentStatus($SegmentStatus)
    {
      $this->SegmentStatus = $SegmentStatus;
      return $this;
    }

}
