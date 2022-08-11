<?php

namespace App\models\ATSFlight;

class FareResponseFlight
{

    /**
     * @var string $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @var boolean $AvailableFlight
     */
    protected $AvailableFlight = null;

    /**
     * @var string $CharterSource
     */
    protected $CharterSource = null;

    /**
     * @var ArrayOfFareResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfFareResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusText
     */
    protected $StatusText = null;

    /**
     * @var SupportedFunctionsEnum $SupportedFunctions
     */
    protected $SupportedFunctions = null;

    /**
     * @var string $TourOperator
     */
    protected $TourOperator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param string $AdditionalInformation
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableFlight()
    {
      return $this->AvailableFlight;
    }

    /**
     * @param boolean $AvailableFlight
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setAvailableFlight($AvailableFlight)
    {
      $this->AvailableFlight = $AvailableFlight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharterSource()
    {
      return $this->CharterSource;
    }

    /**
     * @param string $CharterSource
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setCharterSource($CharterSource)
    {
      $this->CharterSource = $CharterSource;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfFareResponseLeg $Legs
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfFareResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfFareResponsePassenger $Passengers
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
      return $this->StatusText;
    }

    /**
     * @param string $StatusText
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setStatusText($StatusText)
    {
      $this->StatusText = $StatusText;
      return $this;
    }

    /**
     * @return SupportedFunctionsEnum
     */
    public function getSupportedFunctions()
    {
      return $this->SupportedFunctions;
    }

    /**
     * @param SupportedFunctionsEnum $SupportedFunctions
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setSupportedFunctions($SupportedFunctions)
    {
      $this->SupportedFunctions = $SupportedFunctions;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourOperator()
    {
      return $this->TourOperator;
    }

    /**
     * @param string $TourOperator
     * @return \App\models\ATSFlight\FareResponseFlight
     */
    public function setTourOperator($TourOperator)
    {
      $this->TourOperator = $TourOperator;
      return $this;
    }

}
