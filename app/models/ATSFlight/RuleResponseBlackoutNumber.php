<?php

namespace App\models\ATSFlight;

class RuleResponseBlackoutNumber
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var int $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var int $ValidUntil
     */
    protected $ValidUntil = null;

    
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
     * @return \App\models\ATSFlight\RuleResponseBlackoutNumber
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidFrom()
    {
      return $this->ValidFrom;
    }

    /**
     * @param int $ValidFrom
     * @return \App\models\ATSFlight\RuleResponseBlackoutNumber
     */
    public function setValidFrom($ValidFrom)
    {
      $this->ValidFrom = $ValidFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidUntil()
    {
      return $this->ValidUntil;
    }

    /**
     * @param int $ValidUntil
     * @return \App\models\ATSFlight\RuleResponseBlackoutNumber
     */
    public function setValidUntil($ValidUntil)
    {
      $this->ValidUntil = $ValidUntil;
      return $this;
    }

}
