<?php

namespace App\models\ATSFlight;

class BoardingRequestConfiguration
{

    /**
     * @var BoardingRequestCharterFare $Charter
     */
    protected $Charter = null;

    /**
     * @var BoardingRequestWebFare $WebFare
     */
    protected $WebFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoardingRequestCharterFare
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param BoardingRequestCharterFare $Charter
     * @return \App\models\ATSFlight\BoardingRequestConfiguration
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return BoardingRequestWebFare
     */
    public function getWebFare()
    {
      return $this->WebFare;
    }

    /**
     * @param BoardingRequestWebFare $WebFare
     * @return \App\models\ATSFlight\BoardingRequestConfiguration
     */
    public function setWebFare($WebFare)
    {
      $this->WebFare = $WebFare;
      return $this;
    }

}
