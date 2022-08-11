<?php

namespace App\models\ATSFlight;

class AvailabilityRequestLegType
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

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
     * @var AvailabilitySearchType $CarrierSearchType
     */
    protected $CarrierSearchType = null;

    /**
     * @var ArrayOfAvailabilityRequestCarrier $Carriers
     */
    protected $Carriers = null;

    /**
     * @var int $CheckDaysAhead
     */
    protected $CheckDaysAhead = null;

    /**
     * @var int $CheckDaysBack
     */
    protected $CheckDaysBack = null;

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
     * @var int $NumberOfMoveDowns
     */
    protected $NumberOfMoveDowns = null;

    /**
     * @var int $RestrictOvernight
     */
    protected $RestrictOvernight = null;

    /**
     * @var ArrayOfAvailabilityRequestSegmentType $SegmentType
     */
    protected $SegmentType = null;

    /**
     * @var int $TimeWindow
     */
    protected $TimeWindow = null;

    /**
     * @param AvailabilitySearchType $CarrierSearchType
     */
    public function __construct($CarrierSearchType)
    {
      $this->CarrierSearchType = $CarrierSearchType;
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return AvailabilitySearchType
     */
    public function getCarrierSearchType()
    {
      return $this->CarrierSearchType;
    }

    /**
     * @param AvailabilitySearchType $CarrierSearchType
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setCarrierSearchType($CarrierSearchType)
    {
      $this->CarrierSearchType = $CarrierSearchType;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityRequestCarrier
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfAvailabilityRequestCarrier $Carriers
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return int
     */
    public function getCheckDaysAhead()
    {
      return $this->CheckDaysAhead;
    }

    /**
     * @param int $CheckDaysAhead
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setCheckDaysAhead($CheckDaysAhead)
    {
      $this->CheckDaysAhead = $CheckDaysAhead;
      return $this;
    }

    /**
     * @return int
     */
    public function getCheckDaysBack()
    {
      return $this->CheckDaysBack;
    }

    /**
     * @param int $CheckDaysBack
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setCheckDaysBack($CheckDaysBack)
    {
      $this->CheckDaysBack = $CheckDaysBack;
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
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
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfMoveDowns()
    {
      return $this->NumberOfMoveDowns;
    }

    /**
     * @param int $NumberOfMoveDowns
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setNumberOfMoveDowns($NumberOfMoveDowns)
    {
      $this->NumberOfMoveDowns = $NumberOfMoveDowns;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestrictOvernight()
    {
      return $this->RestrictOvernight;
    }

    /**
     * @param int $RestrictOvernight
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setRestrictOvernight($RestrictOvernight)
    {
      $this->RestrictOvernight = $RestrictOvernight;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityRequestSegmentType
     */
    public function getSegmentType()
    {
      return $this->SegmentType;
    }

    /**
     * @param ArrayOfAvailabilityRequestSegmentType $SegmentType
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setSegmentType($SegmentType)
    {
      $this->SegmentType = $SegmentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeWindow()
    {
      return $this->TimeWindow;
    }

    /**
     * @param int $TimeWindow
     * @return \App\models\ATSFlight\AvailabilityRequestLegType
     */
    public function setTimeWindow($TimeWindow)
    {
      $this->TimeWindow = $TimeWindow;
      return $this;
    }

}
