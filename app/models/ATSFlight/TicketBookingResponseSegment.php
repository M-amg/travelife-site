<?php

namespace App\models\ATSFlight;

class TicketBookingResponseSegment
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

    /**
     * @var \DateTime $ArrivalDateTime
     */
    protected $ArrivalDateTime = null;

    /**
     * @var string $ArrivalTerminal
     */
    protected $ArrivalTerminal = null;

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var ArrayOfstring $BookingClasses
     */
    protected $BookingClasses = null;

    /**
     * @var ClassTypeEnum $CabinClasses
     */
    protected $CabinClasses = null;

    /**
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var string $CouponNumber
     */
    protected $CouponNumber = null;

    /**
     * @var string $CouponStatus
     */
    protected $CouponStatus = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $DepartureTerminal
     */
    protected $DepartureTerminal = null;

    /**
     * @var string $Designator
     */
    protected $Designator = null;

    /**
     * @var string $Destination
     */
    protected $Destination = null;

    /**
     * @var string $Equipment
     */
    protected $Equipment = null;

    /**
     * @var \DateTime $FareTimeLimit
     */
    protected $FareTimeLimit = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var string $Flightnumber
     */
    protected $Flightnumber = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var \DateTime $NVA
     */
    protected $NVA = null;

    /**
     * @var \DateTime $NVB
     */
    protected $NVB = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

    /**
     * @var int $OnTimeIndicator
     */
    protected $OnTimeIndicator = null;

    /**
     * @var string $Origin
     */
    protected $Origin = null;

    /**
     * @var string $SegmentID
     */
    protected $SegmentID = null;

    /**
     * @var int $SegmentMileage
     */
    protected $SegmentMileage = null;

    /**
     * @var string $SegmentNumber
     */
    protected $SegmentNumber = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $StopIndicator
     */
    protected $StopIndicator = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var boolean $Ticketed
     */
    protected $Ticketed = null;

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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setArrivalTerminal($ArrivalTerminal)
    {
      $this->ArrivalTerminal = $ArrivalTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getBaggage()
    {
      return $this->Baggage;
    }

    /**
     * @param string $Baggage
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setBookingClasses($BookingClasses)
    {
      $this->BookingClasses = $BookingClasses;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClasses()
    {
      return $this->CabinClasses;
    }

    /**
     * @param ClassTypeEnum $CabinClasses
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setCabinClasses($CabinClasses)
    {
      $this->CabinClasses = $CabinClasses;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponNumber()
    {
      return $this->CouponNumber;
    }

    /**
     * @param string $CouponNumber
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setCouponNumber($CouponNumber)
    {
      $this->CouponNumber = $CouponNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponStatus()
    {
      return $this->CouponStatus;
    }

    /**
     * @param string $CouponStatus
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setCouponStatus($CouponStatus)
    {
      $this->CouponStatus = $CouponStatus;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setDepartureTerminal($DepartureTerminal)
    {
      $this->DepartureTerminal = $DepartureTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDesignator()
    {
      return $this->Designator;
    }

    /**
     * @param string $Designator
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setDesignator($Designator)
    {
      $this->Designator = $Designator;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param string $Destination
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param string $Equipment
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFareTimeLimit()
    {
      if ($this->FareTimeLimit == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FareTimeLimit);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FareTimeLimit
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setFareTimeLimit(\DateTime $FareTimeLimit = null)
    {
      if ($FareTimeLimit == null) {
       $this->FareTimeLimit = null;
      } else {
        $this->FareTimeLimit = $FareTimeLimit->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightnumber()
    {
      return $this->Flightnumber;
    }

    /**
     * @param string $Flightnumber
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setFlightnumber($Flightnumber)
    {
      $this->Flightnumber = $Flightnumber;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setMealCode($MealCode)
    {
      $this->MealCode = $MealCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNVA()
    {
      if ($this->NVA == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NVA);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NVA
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setNVA(\DateTime $NVA = null)
    {
      if ($NVA == null) {
       $this->NVA = null;
      } else {
        $this->NVA = $NVA->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNVB()
    {
      if ($this->NVB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NVB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NVB
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setNVB(\DateTime $NVB = null)
    {
      if ($NVB == null) {
       $this->NVB = null;
      } else {
        $this->NVB = $NVB->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
      return $this;
    }

    /**
     * @return int
     */
    public function getOnTimeIndicator()
    {
      return $this->OnTimeIndicator;
    }

    /**
     * @param int $OnTimeIndicator
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setOnTimeIndicator($OnTimeIndicator)
    {
      $this->OnTimeIndicator = $OnTimeIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setSegmentMileage($SegmentMileage)
    {
      $this->SegmentMileage = $SegmentMileage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param string $SegmentNumber
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStopIndicator()
    {
      return $this->StopIndicator;
    }

    /**
     * @param string $StopIndicator
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setStopIndicator($StopIndicator)
    {
      $this->StopIndicator = $StopIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketed()
    {
      return $this->Ticketed;
    }

    /**
     * @param boolean $Ticketed
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setTicketed($Ticketed)
    {
      $this->Ticketed = $Ticketed;
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
     * @return \App\models\ATSFlight\TicketBookingResponseSegment
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
