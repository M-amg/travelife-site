<?php

namespace App\models\ATSFlight;

class TicketBookingRequestAdvanced extends TicketBookingRequestIssue
{

    /**
     * @var string $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var string $FareText
     */
    protected $FareText = null;

    /**
     * @var SharedPrice $NetFare
     */
    protected $NetFare = null;

    /**
     * @var SharedPrice $NetRemitPrice
     */
    protected $NetRemitPrice = null;

    /**
     * @var ArrayOfTaxDetail $Taxes
     */
    protected $Taxes = null;

    /**
     * @var SharedPrice $TicketFare
     */
    protected $TicketFare = null;

    /**
     * @var TicketBookingTypeEnum $TicketType
     */
    protected $TicketType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getFareCalculation()
    {
      return $this->FareCalculation;
    }

    /**
     * @param string $FareCalculation
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareText()
    {
      return $this->FareText;
    }

    /**
     * @param string $FareText
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setFareText($FareText)
    {
      $this->FareText = $FareText;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getNetFare()
    {
      return $this->NetFare;
    }

    /**
     * @param SharedPrice $NetFare
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setNetFare($NetFare)
    {
      $this->NetFare = $NetFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getNetRemitPrice()
    {
      return $this->NetRemitPrice;
    }

    /**
     * @param SharedPrice $NetRemitPrice
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setNetRemitPrice($NetRemitPrice)
    {
      $this->NetRemitPrice = $NetRemitPrice;
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfTaxDetail $Taxes
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTicketFare()
    {
      return $this->TicketFare;
    }

    /**
     * @param SharedPrice $TicketFare
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setTicketFare($TicketFare)
    {
      $this->TicketFare = $TicketFare;
      return $this;
    }

    /**
     * @return TicketBookingTypeEnum
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param TicketBookingTypeEnum $TicketType
     * @return \App\models\ATSFlight\TicketBookingRequestAdvanced
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
      return $this;
    }

}
