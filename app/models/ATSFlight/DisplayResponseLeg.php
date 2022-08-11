<?php

namespace App\models\ATSFlight;

class DisplayResponseLeg
{

    /**
     * @var DisplayResponseAdvancedPurchase $AdvancedPuchaseInfo
     */
    protected $AdvancedPuchaseInfo = null;

    /**
     * @var string $BlackOutDays
     */
    protected $BlackOutDays = null;

    /**
     * @var ArrayOfstring $BlackoutFlightNumbers
     */
    protected $BlackoutFlightNumbers = null;

    /**
     * @var DisplayResponseCodeValuePair $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var DisplayResponseRouting $RoutingInfo
     */
    protected $RoutingInfo = null;

    /**
     * @var DisplayResponseRule $RuleInfo
     */
    protected $RuleInfo = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var DisplayResponseTicket $TicketInfo
     */
    protected $TicketInfo = null;

    /**
     * @var WeekDayEnum $Weekdays
     */
    protected $Weekdays = null;

    /**
     * @var string $WeekendSurcharge
     */
    protected $WeekendSurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponseAdvancedPurchase
     */
    public function getAdvancedPuchaseInfo()
    {
      return $this->AdvancedPuchaseInfo;
    }

    /**
     * @param DisplayResponseAdvancedPurchase $AdvancedPuchaseInfo
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setAdvancedPuchaseInfo($AdvancedPuchaseInfo)
    {
      $this->AdvancedPuchaseInfo = $AdvancedPuchaseInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getBlackOutDays()
    {
      return $this->BlackOutDays;
    }

    /**
     * @param string $BlackOutDays
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setBlackOutDays($BlackOutDays)
    {
      $this->BlackOutDays = $BlackOutDays;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getBlackoutFlightNumbers()
    {
      return $this->BlackoutFlightNumbers;
    }

    /**
     * @param ArrayOfstring $BlackoutFlightNumbers
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setBlackoutFlightNumbers($BlackoutFlightNumbers)
    {
      $this->BlackoutFlightNumbers = $BlackoutFlightNumbers;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param DisplayResponseCodeValuePair $CabinClass
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return DisplayResponseRouting
     */
    public function getRoutingInfo()
    {
      return $this->RoutingInfo;
    }

    /**
     * @param DisplayResponseRouting $RoutingInfo
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setRoutingInfo($RoutingInfo)
    {
      $this->RoutingInfo = $RoutingInfo;
      return $this;
    }

    /**
     * @return DisplayResponseRule
     */
    public function getRuleInfo()
    {
      return $this->RuleInfo;
    }

    /**
     * @param DisplayResponseRule $RuleInfo
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setRuleInfo($RuleInfo)
    {
      $this->RuleInfo = $RuleInfo;
      return $this;
    }

    /**
     * @return TariffSubTypeEnum
     */
    public function getTariffSubType()
    {
      return $this->TariffSubType;
    }

    /**
     * @param TariffSubTypeEnum $TariffSubType
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setTariffSubType($TariffSubType)
    {
      $this->TariffSubType = $TariffSubType;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return DisplayResponseTicket
     */
    public function getTicketInfo()
    {
      return $this->TicketInfo;
    }

    /**
     * @param DisplayResponseTicket $TicketInfo
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setTicketInfo($TicketInfo)
    {
      $this->TicketInfo = $TicketInfo;
      return $this;
    }

    /**
     * @return WeekDayEnum
     */
    public function getWeekdays()
    {
      return $this->Weekdays;
    }

    /**
     * @param WeekDayEnum $Weekdays
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setWeekdays($Weekdays)
    {
      $this->Weekdays = $Weekdays;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeekendSurcharge()
    {
      return $this->WeekendSurcharge;
    }

    /**
     * @param string $WeekendSurcharge
     * @return \App\models\ATSFlight\DisplayResponseLeg
     */
    public function setWeekendSurcharge($WeekendSurcharge)
    {
      $this->WeekendSurcharge = $WeekendSurcharge;
      return $this;
    }

}
