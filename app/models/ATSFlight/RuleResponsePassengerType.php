<?php

namespace App\models\ATSFlight;

class RuleResponsePassengerType
{

    /**
     * @var SharedPrice $EquivNetSurcharge
     */
    protected $EquivNetSurcharge = null;

    /**
     * @var SharedPrice $EquivSellSurcharge
     */
    protected $EquivSellSurcharge = null;

    /**
     * @var SharedPrice $NetSurcharge
     */
    protected $NetSurcharge = null;

    /**
     * @var string $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var SharedPrice $SellSurcharge
     */
    protected $SellSurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getEquivNetSurcharge()
    {
      return $this->EquivNetSurcharge;
    }

    /**
     * @param SharedPrice $EquivNetSurcharge
     * @return \App\models\ATSFlight\RuleResponsePassengerType
     */
    public function setEquivNetSurcharge($EquivNetSurcharge)
    {
      $this->EquivNetSurcharge = $EquivNetSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivSellSurcharge()
    {
      return $this->EquivSellSurcharge;
    }

    /**
     * @param SharedPrice $EquivSellSurcharge
     * @return \App\models\ATSFlight\RuleResponsePassengerType
     */
    public function setEquivSellSurcharge($EquivSellSurcharge)
    {
      $this->EquivSellSurcharge = $EquivSellSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getNetSurcharge()
    {
      return $this->NetSurcharge;
    }

    /**
     * @param SharedPrice $NetSurcharge
     * @return \App\models\ATSFlight\RuleResponsePassengerType
     */
    public function setNetSurcharge($NetSurcharge)
    {
      $this->NetSurcharge = $NetSurcharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param string $PassengerTypeCode
     * @return \App\models\ATSFlight\RuleResponsePassengerType
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getSellSurcharge()
    {
      return $this->SellSurcharge;
    }

    /**
     * @param SharedPrice $SellSurcharge
     * @return \App\models\ATSFlight\RuleResponsePassengerType
     */
    public function setSellSurcharge($SellSurcharge)
    {
      $this->SellSurcharge = $SellSurcharge;
      return $this;
    }

}
