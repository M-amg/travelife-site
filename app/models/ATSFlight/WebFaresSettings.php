<?php

namespace App\models\ATSFlight;

class WebFaresSettings
{

    /**
     * @var ArrayOfWebCarrier $AllowedCarriers
     */
    protected $AllowedCarriers = null;

    /**
     * @var int $MaxArrivalSearchRadius
     */
    protected $MaxArrivalSearchRadius = null;

    /**
     * @var int $MaxDepartureSearchRadius
     */
    protected $MaxDepartureSearchRadius = null;

    /**
     * @var int $MaxPaymentRequests
     */
    protected $MaxPaymentRequests = null;

    /**
     * @var int $MaxQueryWebFares
     */
    protected $MaxQueryWebFares = null;

    /**
     * @var int $WebFarePort
     */
    protected $WebFarePort = null;

    /**
     * @var string $WebFareServer
     */
    protected $WebFareServer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfWebCarrier
     */
    public function getAllowedCarriers()
    {
      return $this->AllowedCarriers;
    }

    /**
     * @param ArrayOfWebCarrier $AllowedCarriers
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setAllowedCarriers($AllowedCarriers)
    {
      $this->AllowedCarriers = $AllowedCarriers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxArrivalSearchRadius()
    {
      return $this->MaxArrivalSearchRadius;
    }

    /**
     * @param int $MaxArrivalSearchRadius
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setMaxArrivalSearchRadius($MaxArrivalSearchRadius)
    {
      $this->MaxArrivalSearchRadius = $MaxArrivalSearchRadius;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepartureSearchRadius()
    {
      return $this->MaxDepartureSearchRadius;
    }

    /**
     * @param int $MaxDepartureSearchRadius
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setMaxDepartureSearchRadius($MaxDepartureSearchRadius)
    {
      $this->MaxDepartureSearchRadius = $MaxDepartureSearchRadius;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPaymentRequests()
    {
      return $this->MaxPaymentRequests;
    }

    /**
     * @param int $MaxPaymentRequests
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setMaxPaymentRequests($MaxPaymentRequests)
    {
      $this->MaxPaymentRequests = $MaxPaymentRequests;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxQueryWebFares()
    {
      return $this->MaxQueryWebFares;
    }

    /**
     * @param int $MaxQueryWebFares
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setMaxQueryWebFares($MaxQueryWebFares)
    {
      $this->MaxQueryWebFares = $MaxQueryWebFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebFarePort()
    {
      return $this->WebFarePort;
    }

    /**
     * @param int $WebFarePort
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setWebFarePort($WebFarePort)
    {
      $this->WebFarePort = $WebFarePort;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebFareServer()
    {
      return $this->WebFareServer;
    }

    /**
     * @param string $WebFareServer
     * @return \App\models\ATSFlight\WebFaresSettings
     */
    public function setWebFareServer($WebFareServer)
    {
      $this->WebFareServer = $WebFareServer;
      return $this;
    }

}
