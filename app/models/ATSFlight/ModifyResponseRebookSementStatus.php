<?php

namespace App\models\ATSFlight;

class ModifyResponseRebookSementStatus
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

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
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var string $NewClass
     */
    protected $NewClass = null;

    /**
     * @var int $SegmentID
     */
    protected $SegmentID = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
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
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
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
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
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
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
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
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
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
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
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
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewClass()
    {
      return $this->NewClass;
    }

    /**
     * @param string $NewClass
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setNewClass($NewClass)
    {
      $this->NewClass = $NewClass;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentID()
    {
      return $this->SegmentID;
    }

    /**
     * @param int $SegmentID
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setSegmentID($SegmentID)
    {
      $this->SegmentID = $SegmentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponseRebookSementStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
