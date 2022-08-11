<?php

namespace App\models\ATSFlight;

class RequestVayantData
{

    /**
     * @var boolean $AllowAirportChange
     */
    protected $AllowAirportChange = null;

    /**
     * @var AllowSplitTicketEnum $AllowSplitTicket
     */
    protected $AllowSplitTicket = null;

    /**
     * @var BookingChannelEnum $BookingChannel
     */
    protected $BookingChannel = null;

    /**
     * @var boolean $ChangeableFares
     */
    protected $ChangeableFares = null;

    /**
     * @var float $MCTMultiplier
     */
    protected $MCTMultiplier = null;

    /**
     * @var int $MaxConnectTime
     */
    protected $MaxConnectTime = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var ArrayOfstring $PointOfSales
     */
    protected $PointOfSales = null;

    /**
     * @var boolean $RefundableFares
     */
    protected $RefundableFares = null;

    /**
     * @var FareSourceEnum $VayantFareSource
     */
    protected $VayantFareSource = null;

    /**
     * @param int $NumberOfFares
     */
    public function __construct($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
    }

    /**
     * @return boolean
     */
    public function getAllowAirportChange()
    {
      return $this->AllowAirportChange;
    }

    /**
     * @param boolean $AllowAirportChange
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setAllowAirportChange($AllowAirportChange)
    {
      $this->AllowAirportChange = $AllowAirportChange;
      return $this;
    }

    /**
     * @return AllowSplitTicketEnum
     */
    public function getAllowSplitTicket()
    {
      return $this->AllowSplitTicket;
    }

    /**
     * @param AllowSplitTicketEnum $AllowSplitTicket
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setAllowSplitTicket($AllowSplitTicket)
    {
      $this->AllowSplitTicket = $AllowSplitTicket;
      return $this;
    }

    /**
     * @return BookingChannelEnum
     */
    public function getBookingChannel()
    {
      return $this->BookingChannel;
    }

    /**
     * @param BookingChannelEnum $BookingChannel
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setBookingChannel($BookingChannel)
    {
      $this->BookingChannel = $BookingChannel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeableFares()
    {
      return $this->ChangeableFares;
    }

    /**
     * @param boolean $ChangeableFares
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setChangeableFares($ChangeableFares)
    {
      $this->ChangeableFares = $ChangeableFares;
      return $this;
    }

    /**
     * @return float
     */
    public function getMCTMultiplier()
    {
      return $this->MCTMultiplier;
    }

    /**
     * @param float $MCTMultiplier
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setMCTMultiplier($MCTMultiplier)
    {
      $this->MCTMultiplier = $MCTMultiplier;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnectTime()
    {
      return $this->MaxConnectTime;
    }

    /**
     * @param int $MaxConnectTime
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setMaxConnectTime($MaxConnectTime)
    {
      $this->MaxConnectTime = $MaxConnectTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPointOfSales()
    {
      return $this->PointOfSales;
    }

    /**
     * @param ArrayOfstring $PointOfSales
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setPointOfSales($PointOfSales)
    {
      $this->PointOfSales = $PointOfSales;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundableFares()
    {
      return $this->RefundableFares;
    }

    /**
     * @param boolean $RefundableFares
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setRefundableFares($RefundableFares)
    {
      $this->RefundableFares = $RefundableFares;
      return $this;
    }

    /**
     * @return FareSourceEnum
     */
    public function getVayantFareSource()
    {
      return $this->VayantFareSource;
    }

    /**
     * @param FareSourceEnum $VayantFareSource
     * @return \App\models\ATSFlight\RequestVayantData
     */
    public function setVayantFareSource($VayantFareSource)
    {
      $this->VayantFareSource = $VayantFareSource;
      return $this;
    }

}
