<?php

namespace App\models\ATSFlight;

class DetailsResponseSegment
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
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CodeShare
     */
    protected $CodeShare = null;

    /**
     * @var DaysOfWeekEnum $DaysOfOperation
     */
    protected $DaysOfOperation = null;

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
     * @var string $Equipment
     */
    protected $Equipment = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var string $MealCode
     */
    protected $MealCode = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

    /**
     * @var string $OnTimeIndicator
     */
    protected $OnTimeIndicator = null;

    /**
     * @var duration $SegmentTravelTime
     */
    protected $SegmentTravelTime = null;

    
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setArrivalTerminal($ArrivalTerminal)
    {
      $this->ArrivalTerminal = $ArrivalTerminal;
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setCodeShare($CodeShare)
    {
      $this->CodeShare = $CodeShare;
      return $this;
    }

    /**
     * @return DaysOfWeekEnum
     */
    public function getDaysOfOperation()
    {
      return $this->DaysOfOperation;
    }

    /**
     * @param DaysOfWeekEnum $DaysOfOperation
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setDaysOfOperation($DaysOfOperation)
    {
      $this->DaysOfOperation = $DaysOfOperation;
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setDepartureTerminal($DepartureTerminal)
    {
      $this->DepartureTerminal = $DepartureTerminal;
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
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
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnTimeIndicator()
    {
      return $this->OnTimeIndicator;
    }

    /**
     * @param string $OnTimeIndicator
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setOnTimeIndicator($OnTimeIndicator)
    {
      $this->OnTimeIndicator = $OnTimeIndicator;
      return $this;
    }

    /**
     * @return duration
     */
    public function getSegmentTravelTime()
    {
      return $this->SegmentTravelTime;
    }

    /**
     * @param duration $SegmentTravelTime
     * @return \App\models\ATSFlight\DetailsResponseSegment
     */
    public function setSegmentTravelTime($SegmentTravelTime)
    {
      $this->SegmentTravelTime = $SegmentTravelTime;
      return $this;
    }

}
