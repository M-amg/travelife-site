<?php

namespace App\models\ATSFlight;

class BoardingRequestWebFare
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \App\models\ATSFlight\BoardingRequestWebFare
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\BoardingRequestWebFare
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
