<?php

namespace App\models\ATSFlight;

class PNRResponseStoredFareTKTSement
{

    /**
     * @var string $Designator
     */
    protected $Designator = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $FreeBaggageAllowance
     */
    protected $FreeBaggageAllowance = null;

    /**
     * @var string $NVA
     */
    protected $NVA = null;

    /**
     * @var string $NVB
     */
    protected $NVB = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var int $OriginalNumber
     */
    protected $OriginalNumber = null;

    /**
     * @var string $StopIndicator
     */
    protected $StopIndicator = null;

    /**
     * @var string $TicketStatus
     */
    protected $TicketStatus = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setDesignator($Designator)
    {
      $this->Designator = $Designator;
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
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeBaggageAllowance()
    {
      return $this->FreeBaggageAllowance;
    }

    /**
     * @param string $FreeBaggageAllowance
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setFreeBaggageAllowance($FreeBaggageAllowance)
    {
      $this->FreeBaggageAllowance = $FreeBaggageAllowance;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVA()
    {
      return $this->NVA;
    }

    /**
     * @param string $NVA
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setNVA($NVA)
    {
      $this->NVA = $NVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVB()
    {
      return $this->NVB;
    }

    /**
     * @param string $NVB
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setNVB($NVB)
    {
      $this->NVB = $NVB;
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
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginalNumber()
    {
      return $this->OriginalNumber;
    }

    /**
     * @param int $OriginalNumber
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setOriginalNumber($OriginalNumber)
    {
      $this->OriginalNumber = $OriginalNumber;
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
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setStopIndicator($StopIndicator)
    {
      $this->StopIndicator = $StopIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param string $TicketStatus
     * @return \App\models\ATSFlight\PNRResponseStoredFareTKTSement
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

}
