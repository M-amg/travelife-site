<?php

namespace App\models\ATSFlight;

class AvailabilityResponseDatePair
{

    /**
     * @var string $AllotmentID
     */
    protected $AllotmentID = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var ArrayOfBookingClasses $Classes
     */
    protected $Classes = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $FreeSeats
     */
    protected $FreeSeats = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
     */
    public function setAllotmentID($AllotmentID)
    {
      $this->AllotmentID = $AllotmentID;
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
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
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
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return ArrayOfBookingClasses
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfBookingClasses $Classes
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
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
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
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
     * @return int
     */
    public function getFreeSeats()
    {
      return $this->FreeSeats;
    }

    /**
     * @param int $FreeSeats
     * @return \App\models\ATSFlight\AvailabilityResponseDatePair
     */
    public function setFreeSeats($FreeSeats)
    {
      $this->FreeSeats = $FreeSeats;
      return $this;
    }

}
