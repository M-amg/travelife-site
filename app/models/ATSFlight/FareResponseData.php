<?php

namespace App\models\ATSFlight;

class FareResponseData
{

    /**
     * @var ArrayOfFareResponseFare $Fares
     */
    protected $Fares = null;

    /**
     * @var int $NextFareNumber
     */
    protected $NextFareNumber = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var int $RequestID
     */
    protected $RequestID = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFareResponseFare
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfFareResponseFare $Fares
     * @return \App\models\ATSFlight\FareResponseData
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNextFareNumber()
    {
      return $this->NextFareNumber;
    }

    /**
     * @param int $NextFareNumber
     * @return \App\models\ATSFlight\FareResponseData
     */
    public function setNextFareNumber($NextFareNumber)
    {
      $this->NextFareNumber = $NextFareNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\FareResponseData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequestID()
    {
      return $this->RequestID;
    }

    /**
     * @param int $RequestID
     * @return \App\models\ATSFlight\FareResponseData
     */
    public function setRequestID($RequestID)
    {
      $this->RequestID = $RequestID;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\FareResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
