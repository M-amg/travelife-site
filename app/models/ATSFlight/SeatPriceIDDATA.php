<?php

namespace App\models\ATSFlight;

class SeatPriceIDDATA
{

    /**
     * @var boolean $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var ArrayOfstring $PassengerIDs
     */
    protected $PassengerIDs = null;

    /**
     * @var int $PriceID
     */
    protected $PriceID = null;

    /**
     * @var boolean $Refundable
     */
    protected $Refundable = null;

    /**
     * @var string $UsedFrequentFlyerProgram
     */
    protected $UsedFrequentFlyerProgram = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param boolean $Commissionable
     * @return \App\models\ATSFlight\SeatPriceIDDATA
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPassengerIDs()
    {
      return $this->PassengerIDs;
    }

    /**
     * @param ArrayOfstring $PassengerIDs
     * @return \App\models\ATSFlight\SeatPriceIDDATA
     */
    public function setPassengerIDs($PassengerIDs)
    {
      $this->PassengerIDs = $PassengerIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceID()
    {
      return $this->PriceID;
    }

    /**
     * @param int $PriceID
     * @return \App\models\ATSFlight\SeatPriceIDDATA
     */
    public function setPriceID($PriceID)
    {
      $this->PriceID = $PriceID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \App\models\ATSFlight\SeatPriceIDDATA
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedFrequentFlyerProgram()
    {
      return $this->UsedFrequentFlyerProgram;
    }

    /**
     * @param string $UsedFrequentFlyerProgram
     * @return \App\models\ATSFlight\SeatPriceIDDATA
     */
    public function setUsedFrequentFlyerProgram($UsedFrequentFlyerProgram)
    {
      $this->UsedFrequentFlyerProgram = $UsedFrequentFlyerProgram;
      return $this;
    }

}
