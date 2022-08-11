<?php

namespace App\models\ATSFlight;

class RuleResponseTicketType
{

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

    /**
     * @var TicketTypeEnum $TicketType
     */
    protected $TicketType = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\RuleResponseTicketType
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
     * @return \App\models\ATSFlight\RuleResponseTicketType
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
     * @return \App\models\ATSFlight\RuleResponseTicketType
     */
    public function setSellCurrency($SellCurrency)
    {
      $this->SellCurrency = $SellCurrency;
      return $this;
    }

    /**
     * @return TicketTypeEnum
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param TicketTypeEnum $TicketType
     * @return \App\models\ATSFlight\RuleResponseTicketType
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
      return $this;
    }

}
