<?php

namespace App\models\ATSFlight;

class RoutingResponseTime
{

    /**
     * @var duration $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var duration $ValidUntil
     */
    protected $ValidUntil = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return duration
     */
    public function getValidFrom()
    {
      return $this->ValidFrom;
    }

    /**
     * @param duration $ValidFrom
     * @return \App\models\ATSFlight\RoutingResponseTime
     */
    public function setValidFrom($ValidFrom)
    {
      $this->ValidFrom = $ValidFrom;
      return $this;
    }

    /**
     * @return duration
     */
    public function getValidUntil()
    {
      return $this->ValidUntil;
    }

    /**
     * @param duration $ValidUntil
     * @return \App\models\ATSFlight\RoutingResponseTime
     */
    public function setValidUntil($ValidUntil)
    {
      $this->ValidUntil = $ValidUntil;
      return $this;
    }

}
