<?php

namespace App\models\ATSFlight;

class RoutingsRequestData
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var boolean $ReturnCarrierOnly
     */
    protected $ReturnCarrierOnly = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfAgent $WebAgents
     */
    protected $WebAgents = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return string
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
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
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnCarrierOnly()
    {
      return $this->ReturnCarrierOnly;
    }

    /**
     * @param boolean $ReturnCarrierOnly
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setReturnCarrierOnly($ReturnCarrierOnly)
    {
      $this->ReturnCarrierOnly = $ReturnCarrierOnly;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfAgent
     */
    public function getWebAgents()
    {
      return $this->WebAgents;
    }

    /**
     * @param ArrayOfAgent $WebAgents
     * @return \App\models\ATSFlight\RoutingsRequestData
     */
    public function setWebAgents($WebAgents)
    {
      $this->WebAgents = $WebAgents;
      return $this;
    }

}
