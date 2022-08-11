<?php

namespace App\models\ATSFlight;

class PNRResponseStoredFare
{

    /**
     * @var PNRResponseFareDetails $FareDetails
     */
    protected $FareDetails = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var ArrayOfint $PassengerNumber
     */
    protected $PassengerNumber = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $StoredFareCreationDate
     */
    protected $StoredFareCreationDate = null;

    /**
     * @var ArrayOfPNRResponseTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var PNRResponseTicketingDetails $TicketingDetails
     */
    protected $TicketingDetails = null;

    /**
     * @var ArrayOfPNRResponseStoredFareTKTSement $TicketingSegments
     */
    protected $TicketingSegments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseFareDetails
     */
    public function getFareDetails()
    {
      return $this->FareDetails;
    }

    /**
     * @param PNRResponseFareDetails $FareDetails
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setFareDetails($FareDetails)
    {
      $this->FareDetails = $FareDetails;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTicketingDate()
    {
      if ($this->LastTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTicketingDate
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setLastTicketingDate(\DateTime $LastTicketingDate = null)
    {
      if ($LastTicketingDate == null) {
       $this->LastTicketingDate = null;
      } else {
        $this->LastTicketingDate = $LastTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerNumber()
    {
      return $this->PassengerNumber;
    }

    /**
     * @param ArrayOfint $PassengerNumber
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setPassengerNumber($PassengerNumber)
    {
      $this->PassengerNumber = $PassengerNumber;
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
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStoredFareCreationDate()
    {
      if ($this->StoredFareCreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StoredFareCreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StoredFareCreationDate
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setStoredFareCreationDate(\DateTime $StoredFareCreationDate = null)
    {
      if ($StoredFareCreationDate == null) {
       $this->StoredFareCreationDate = null;
      } else {
        $this->StoredFareCreationDate = $StoredFareCreationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfPNRResponseTax $Taxes
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return PNRResponseTicketingDetails
     */
    public function getTicketingDetails()
    {
      return $this->TicketingDetails;
    }

    /**
     * @param PNRResponseTicketingDetails $TicketingDetails
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setTicketingDetails($TicketingDetails)
    {
      $this->TicketingDetails = $TicketingDetails;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseStoredFareTKTSement
     */
    public function getTicketingSegments()
    {
      return $this->TicketingSegments;
    }

    /**
     * @param ArrayOfPNRResponseStoredFareTKTSement $TicketingSegments
     * @return \App\models\ATSFlight\PNRResponseStoredFare
     */
    public function setTicketingSegments($TicketingSegments)
    {
      $this->TicketingSegments = $TicketingSegments;
      return $this;
    }

}
