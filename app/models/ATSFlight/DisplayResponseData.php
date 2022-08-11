<?php

namespace App\models\ATSFlight;

class DisplayResponseData
{

    /**
     * @var ArrayOfDisplayResponseFare $Fares
     */
    protected $Fares = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDisplayResponseFare
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfDisplayResponseFare $Fares
     * @return \App\models\ATSFlight\DisplayResponseData
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
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
     * @return \App\models\ATSFlight\DisplayResponseData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
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
     * @return \App\models\ATSFlight\DisplayResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
