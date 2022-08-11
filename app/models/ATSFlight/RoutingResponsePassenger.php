<?php

namespace App\models\ATSFlight;

class RoutingResponsePassenger
{

    /**
     * @var SharedPrice $EquivalentNetSurcharge
     */
    protected $EquivalentNetSurcharge = null;

    /**
     * @var SharedPrice $EquivalentSellSurcharge
     */
    protected $EquivalentSellSurcharge = null;

    /**
     * @var SharedPrice $NetSurcharge
     */
    protected $NetSurcharge = null;

    /**
     * @var PassengerEnum $PassengerType
     */
    protected $PassengerType = null;

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
    public function getEquivalentNetSurcharge()
    {
      return $this->EquivalentNetSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentNetSurcharge
     * @return \App\models\ATSFlight\RoutingResponsePassenger
     */
    public function setEquivalentNetSurcharge($EquivalentNetSurcharge)
    {
      $this->EquivalentNetSurcharge = $EquivalentNetSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentSellSurcharge()
    {
      return $this->EquivalentSellSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentSellSurcharge
     * @return \App\models\ATSFlight\RoutingResponsePassenger
     */
    public function setEquivalentSellSurcharge($EquivalentSellSurcharge)
    {
      $this->EquivalentSellSurcharge = $EquivalentSellSurcharge;
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
     * @return \App\models\ATSFlight\RoutingResponsePassenger
     */
    public function setNetSurcharge($NetSurcharge)
    {
      $this->NetSurcharge = $NetSurcharge;
      return $this;
    }

    /**
     * @return PassengerEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerEnum $PassengerType
     * @return \App\models\ATSFlight\RoutingResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \App\models\ATSFlight\RoutingResponsePassenger
     */
    public function setSellSurcharge($SellSurcharge)
    {
      $this->SellSurcharge = $SellSurcharge;
      return $this;
    }

}
