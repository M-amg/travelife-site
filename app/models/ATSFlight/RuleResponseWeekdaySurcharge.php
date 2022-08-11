<?php

namespace App\models\ATSFlight;

class RuleResponseWeekdaySurcharge
{

    /**
     * @var FlightDaysEnum $DaysIn
     */
    protected $DaysIn = null;

    /**
     * @var FlightDaysEnum $DaysOut
     */
    protected $DaysOut = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NetCurrency
     */
    protected $NetCurrency = null;

    /**
     * @var ArrayOfRuleResponsePassengerType $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var string $SellCurrency
     */
    protected $SellCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FlightDaysEnum
     */
    public function getDaysIn()
    {
      return $this->DaysIn;
    }

    /**
     * @param FlightDaysEnum $DaysIn
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setDaysIn($DaysIn)
    {
      $this->DaysIn = $DaysIn;
      return $this;
    }

    /**
     * @return FlightDaysEnum
     */
    public function getDaysOut()
    {
      return $this->DaysOut;
    }

    /**
     * @param FlightDaysEnum $DaysOut
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setDaysOut($DaysOut)
    {
      $this->DaysOut = $DaysOut;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetCurrency()
    {
      return $this->NetCurrency;
    }

    /**
     * @param string $NetCurrency
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setNetCurrency($NetCurrency)
    {
      $this->NetCurrency = $NetCurrency;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponsePassengerType
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param ArrayOfRuleResponsePassengerType $PassengerType
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellCurrency()
    {
      return $this->SellCurrency;
    }

    /**
     * @param string $SellCurrency
     * @return \App\models\ATSFlight\RuleResponseWeekdaySurcharge
     */
    public function setSellCurrency($SellCurrency)
    {
      $this->SellCurrency = $SellCurrency;
      return $this;
    }

}
