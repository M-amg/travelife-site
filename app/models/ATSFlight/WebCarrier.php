<?php

namespace App\models\ATSFlight;

class WebCarrier
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var boolean $ExcludeCarrier
     */
    protected $ExcludeCarrier = null;

    /**
     * @var boolean $IsAPI
     */
    protected $IsAPI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\WebCarrier
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeCarrier()
    {
      return $this->ExcludeCarrier;
    }

    /**
     * @param boolean $ExcludeCarrier
     * @return \App\models\ATSFlight\WebCarrier
     */
    public function setExcludeCarrier($ExcludeCarrier)
    {
      $this->ExcludeCarrier = $ExcludeCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAPI()
    {
      return $this->IsAPI;
    }

    /**
     * @param boolean $IsAPI
     * @return \App\models\ATSFlight\WebCarrier
     */
    public function setIsAPI($IsAPI)
    {
      $this->IsAPI = $IsAPI;
      return $this;
    }

}
