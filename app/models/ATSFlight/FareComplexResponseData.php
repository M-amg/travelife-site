<?php

namespace App\models\ATSFlight;

class FareComplexResponseData
{

    /**
     * @var ArrayOfFareComplexResponseFare $Fares
     */
    protected $Fares = null;

    /**
     * @var MCTData $MCT
     */
    protected $MCT = null;

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
     * @return ArrayOfFareComplexResponseFare
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfFareComplexResponseFare $Fares
     * @return \App\models\ATSFlight\FareComplexResponseData
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
      return $this;
    }

    /**
     * @return MCTData
     */
    public function getMCT()
    {
      return $this->MCT;
    }

    /**
     * @param MCTData $MCT
     * @return \App\models\ATSFlight\FareComplexResponseData
     */
    public function setMCT($MCT)
    {
      $this->MCT = $MCT;
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
     * @return \App\models\ATSFlight\FareComplexResponseData
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
     * @return \App\models\ATSFlight\FareComplexResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
