<?php

namespace App\models\ATSFlight;

class RoutingResponseInformation
{

    /**
     * @var string $EquivCurrencyCode
     */
    protected $EquivCurrencyCode = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var ArrayOfRoutingResponseRouting $Routing
     */
    protected $Routing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEquivCurrencyCode()
    {
      return $this->EquivCurrencyCode;
    }

    /**
     * @param string $EquivCurrencyCode
     * @return \App\models\ATSFlight\RoutingResponseInformation
     */
    public function setEquivCurrencyCode($EquivCurrencyCode)
    {
      $this->EquivCurrencyCode = $EquivCurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordSet()
    {
      return $this->RecordSet;
    }

    /**
     * @param string $RecordSet
     * @return \App\models\ATSFlight\RoutingResponseInformation
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseRouting
     */
    public function getRouting()
    {
      return $this->Routing;
    }

    /**
     * @param ArrayOfRoutingResponseRouting $Routing
     * @return \App\models\ATSFlight\RoutingResponseInformation
     */
    public function setRouting($Routing)
    {
      $this->Routing = $Routing;
      return $this;
    }

}
