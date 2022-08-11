<?php

namespace App\models\ATSFlight;

class TicketResponsePassenger
{

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $IATABSP
     */
    protected $IATABSP = null;

    /**
     * @var string $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    /**
     * @var string $TicketingFare
     */
    protected $TicketingFare = null;

    /**
     * @var string $TourCode
     */
    protected $TourCode = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATABSP()
    {
      return $this->IATABSP;
    }

    /**
     * @param string $IATABSP
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setIATABSP($IATABSP)
    {
      $this->IATABSP = $IATABSP;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param string $PassengerType
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerTypeName()
    {
      return $this->PassengerTypeName;
    }

    /**
     * @param PassengerTypeEnum $PassengerTypeName
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketingFare()
    {
      return $this->TicketingFare;
    }

    /**
     * @param string $TicketingFare
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setTicketingFare($TicketingFare)
    {
      $this->TicketingFare = $TicketingFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \App\models\ATSFlight\TicketResponsePassenger
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

}
