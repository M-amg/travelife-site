<?php

namespace App\models\ATSFlight;

class FareResponseLegFareInfo
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var ClassTypeEnum $LegCabinClass
     */
    protected $LegCabinClass = null;

    /**
     * @var FareResponseRouting $Routing
     */
    protected $Routing = null;

    /**
     * @var FareResponseRule $Rule
     */
    protected $Rule = null;

    /**
     * @var string $TariffMatchCode
     */
    protected $TariffMatchCode = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var boolean $TaxesIgnored
     */
    protected $TaxesIgnored = null;

    /**
     * @var FareResponseTicket $Ticket
     */
    protected $Ticket = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getFarebase()
    {
      return $this->Farebase;
    }

    /**
     * @param string $Farebase
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getLegCabinClass()
    {
      return $this->LegCabinClass;
    }

    /**
     * @param ClassTypeEnum $LegCabinClass
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setLegCabinClass($LegCabinClass)
    {
      $this->LegCabinClass = $LegCabinClass;
      return $this;
    }

    /**
     * @return FareResponseRouting
     */
    public function getRouting()
    {
      return $this->Routing;
    }

    /**
     * @param FareResponseRouting $Routing
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setRouting($Routing)
    {
      $this->Routing = $Routing;
      return $this;
    }

    /**
     * @return FareResponseRule
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param FareResponseRule $Rule
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setRule($Rule)
    {
      $this->Rule = $Rule;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffMatchCode()
    {
      return $this->TariffMatchCode;
    }

    /**
     * @param string $TariffMatchCode
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setTariffMatchCode($TariffMatchCode)
    {
      $this->TariffMatchCode = $TariffMatchCode;
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
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
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
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxesIgnored()
    {
      return $this->TaxesIgnored;
    }

    /**
     * @param boolean $TaxesIgnored
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setTaxesIgnored($TaxesIgnored)
    {
      $this->TaxesIgnored = $TaxesIgnored;
      return $this;
    }

    /**
     * @return FareResponseTicket
     */
    public function getTicket()
    {
      return $this->Ticket;
    }

    /**
     * @param FareResponseTicket $Ticket
     * @return \App\models\ATSFlight\FareResponseLegFareInfo
     */
    public function setTicket($Ticket)
    {
      $this->Ticket = $Ticket;
      return $this;
    }

}
