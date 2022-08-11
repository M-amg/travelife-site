<?php

namespace App\models\ATSFlight;

class TicketBookingRequestSegment
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $Designator
     */
    protected $Designator = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var \DateTime $NVA
     */
    protected $NVA = null;

    /**
     * @var \DateTime $NVB
     */
    protected $NVB = null;

    /**
     * @var string $StopIndicator
     */
    protected $StopIndicator = null;

    
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
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
    public function getDesignator()
    {
      return $this->Designator;
    }

    /**
     * @param string $Designator
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setDesignator($Designator)
    {
      $this->Designator = $Designator;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
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
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
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
     * @return string
     */
    public function getStopIndicator()
    {
      return $this->StopIndicator;
    }

    /**
     * @param string $StopIndicator
     * @return \App\models\ATSFlight\TicketBookingRequestSegment
     */
    public function setStopIndicator($StopIndicator)
    {
      $this->StopIndicator = $StopIndicator;
      return $this;
    }

}
