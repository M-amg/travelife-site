<?php

namespace App\models\ATSFlight;

class Cancelation
{

    /**
     * @var PaxValues $Buy
     */
    protected $Buy = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var int $DaysBeforeDeparture
     */
    protected $DaysBeforeDeparture = null;

    /**
     * @var CancelationDirection $Direction
     */
    protected $Direction = null;

    /**
     * @var PaxValues $Sell
     */
    protected $Sell = null;

    /**
     * @var CancelationType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaxValues
     */
    public function getBuy()
    {
      return $this->Buy;
    }

    /**
     * @param PaxValues $Buy
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setBuy($Buy)
    {
      $this->Buy = $Buy;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysBeforeDeparture()
    {
      return $this->DaysBeforeDeparture;
    }

    /**
     * @param int $DaysBeforeDeparture
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setDaysBeforeDeparture($DaysBeforeDeparture)
    {
      $this->DaysBeforeDeparture = $DaysBeforeDeparture;
      return $this;
    }

    /**
     * @return CancelationDirection
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param CancelationDirection $Direction
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return PaxValues
     */
    public function getSell()
    {
      return $this->Sell;
    }

    /**
     * @param PaxValues $Sell
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setSell($Sell)
    {
      $this->Sell = $Sell;
      return $this;
    }

    /**
     * @return CancelationType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CancelationType $Type
     * @return \App\models\ATSFlight\Cancelation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
