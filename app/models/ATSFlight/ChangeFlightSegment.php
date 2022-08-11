<?php

namespace App\models\ATSFlight;

class ChangeFlightSegment
{

    /**
     * @var string $Availstring
     */
    protected $Availstring = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var duration $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var int $OriginalSegmentNumber
     */
    protected $OriginalSegmentNumber = null;

    /**
     * @param int $OriginalSegmentNumber
     */
    public function __construct($OriginalSegmentNumber)
    {
      $this->OriginalSegmentNumber = $OriginalSegmentNumber;
    }

    /**
     * @return string
     */
    public function getAvailstring()
    {
      return $this->Availstring;
    }

    /**
     * @param string $Availstring
     * @return \App\models\ATSFlight\ChangeFlightSegment
     */
    public function setAvailstring($Availstring)
    {
      $this->Availstring = $Availstring;
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
     * @return \App\models\ATSFlight\ChangeFlightSegment
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
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
     * @return \App\models\ATSFlight\ChangeFlightSegment
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
     * @return \App\models\ATSFlight\ChangeFlightSegment
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
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
     * @return \App\models\ATSFlight\ChangeFlightSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \App\models\ATSFlight\ChangeFlightSegment
     */
    public function setOriginalSegmentNumber($OriginalSegmentNumber)
    {
      $this->OriginalSegmentNumber = $OriginalSegmentNumber;
      return $this;
    }

}
