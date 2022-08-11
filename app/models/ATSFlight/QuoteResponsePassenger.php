<?php

namespace App\models\ATSFlight;

class QuoteResponsePassenger
{

    /**
     * @var CalculationResponseData $CalcInfo
     */
    protected $CalcInfo = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var SharedPrice $EquivalentMinimumSellingFarePrice
     */
    protected $EquivalentMinimumSellingFarePrice = null;

    /**
     * @var SharedPrice $EquivalentNetFarePrice
     */
    protected $EquivalentNetFarePrice = null;

    /**
     * @var SharedPrice $EquivalentPasFarePrice
     */
    protected $EquivalentPasFarePrice = null;

    /**
     * @var SharedPrice $EquivalentPublishedFarePrice
     */
    protected $EquivalentPublishedFarePrice = null;

    /**
     * @var SharedPrice $EquivalentQSurchargePrice
     */
    protected $EquivalentQSurchargePrice = null;

    /**
     * @var SharedPrice $EquivalentStreetFarePrice
     */
    protected $EquivalentStreetFarePrice = null;

    /**
     * @var SharedPrice $EquivalentTicketingFarePrice
     */
    protected $EquivalentTicketingFarePrice = null;

    /**
     * @var SharedPrice $EquivalentTotalTaxPrice
     */
    protected $EquivalentTotalTaxPrice = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var SharedPrice $MinimumSellingFarePrice
     */
    protected $MinimumSellingFarePrice = null;

    /**
     * @var SharedPrice $NetFarePrice
     */
    protected $NetFarePrice = null;

    /**
     * @var SharedPrice $PasFarePrice
     */
    protected $PasFarePrice = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var SharedPrice $PublishedFarePrice
     */
    protected $PublishedFarePrice = null;

    /**
     * @var boolean $QSurchargeIncludedInNetFare
     */
    protected $QSurchargeIncludedInNetFare = null;

    /**
     * @var SharedPrice $QSurchargePrice
     */
    protected $QSurchargePrice = null;

    /**
     * @var string $QuoteLink
     */
    protected $QuoteLink = null;

    /**
     * @var boolean $QuoteRequiresAdditionOfQSurcharge
     */
    protected $QuoteRequiresAdditionOfQSurcharge = null;

    /**
     * @var ArrayOfQuoteResponseSurcharge $QuoteResponseSurcharges
     */
    protected $QuoteResponseSurcharges = null;

    /**
     * @var ArrayOfQuoteResponseSegment $Segment
     */
    protected $Segment = null;

    /**
     * @var SharedPrice $StreetFarePrice
     */
    protected $StreetFarePrice = null;

    /**
     * @var ArrayOfQuoteTax $TaxDetails
     */
    protected $TaxDetails = null;

    /**
     * @var QuoteResponseTicket $TicketData
     */
    protected $TicketData = null;

    /**
     * @var SharedPrice $TicketingFarePrice
     */
    protected $TicketingFarePrice = null;

    /**
     * @var SharedPrice $TotalTaxPrice
     */
    protected $TotalTaxPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CalculationResponseData
     */
    public function getCalcInfo()
    {
      return $this->CalcInfo;
    }

    /**
     * @param CalculationResponseData $CalcInfo
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setCalcInfo($CalcInfo)
    {
      $this->CalcInfo = $CalcInfo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->DateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setDateOfBirth(\DateTime $DateOfBirth = null)
    {
      if ($DateOfBirth == null) {
       $this->DateOfBirth = null;
      } else {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentMinimumSellingFarePrice()
    {
      return $this->EquivalentMinimumSellingFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentMinimumSellingFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentMinimumSellingFarePrice($EquivalentMinimumSellingFarePrice)
    {
      $this->EquivalentMinimumSellingFarePrice = $EquivalentMinimumSellingFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentNetFarePrice()
    {
      return $this->EquivalentNetFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentNetFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentNetFarePrice($EquivalentNetFarePrice)
    {
      $this->EquivalentNetFarePrice = $EquivalentNetFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPasFarePrice()
    {
      return $this->EquivalentPasFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentPasFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentPasFarePrice($EquivalentPasFarePrice)
    {
      $this->EquivalentPasFarePrice = $EquivalentPasFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPublishedFarePrice()
    {
      return $this->EquivalentPublishedFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentPublishedFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentPublishedFarePrice($EquivalentPublishedFarePrice)
    {
      $this->EquivalentPublishedFarePrice = $EquivalentPublishedFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentQSurchargePrice()
    {
      return $this->EquivalentQSurchargePrice;
    }

    /**
     * @param SharedPrice $EquivalentQSurchargePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentQSurchargePrice($EquivalentQSurchargePrice)
    {
      $this->EquivalentQSurchargePrice = $EquivalentQSurchargePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentStreetFarePrice()
    {
      return $this->EquivalentStreetFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentStreetFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentStreetFarePrice($EquivalentStreetFarePrice)
    {
      $this->EquivalentStreetFarePrice = $EquivalentStreetFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTicketingFarePrice()
    {
      return $this->EquivalentTicketingFarePrice;
    }

    /**
     * @param SharedPrice $EquivalentTicketingFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentTicketingFarePrice($EquivalentTicketingFarePrice)
    {
      $this->EquivalentTicketingFarePrice = $EquivalentTicketingFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTaxPrice()
    {
      return $this->EquivalentTotalTaxPrice;
    }

    /**
     * @param SharedPrice $EquivalentTotalTaxPrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setEquivalentTotalTaxPrice($EquivalentTotalTaxPrice)
    {
      $this->EquivalentTotalTaxPrice = $EquivalentTotalTaxPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreePassengerType()
    {
      return $this->FreePassengerType;
    }

    /**
     * @param string $FreePassengerType
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getMinimumSellingFarePrice()
    {
      return $this->MinimumSellingFarePrice;
    }

    /**
     * @param SharedPrice $MinimumSellingFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setMinimumSellingFarePrice($MinimumSellingFarePrice)
    {
      $this->MinimumSellingFarePrice = $MinimumSellingFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getNetFarePrice()
    {
      return $this->NetFarePrice;
    }

    /**
     * @param SharedPrice $NetFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setNetFarePrice($NetFarePrice)
    {
      $this->NetFarePrice = $NetFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPasFarePrice()
    {
      return $this->PasFarePrice;
    }

    /**
     * @param SharedPrice $PasFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setPasFarePrice($PasFarePrice)
    {
      $this->PasFarePrice = $PasFarePrice;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPublishedFarePrice()
    {
      return $this->PublishedFarePrice;
    }

    /**
     * @param SharedPrice $PublishedFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setPublishedFarePrice($PublishedFarePrice)
    {
      $this->PublishedFarePrice = $PublishedFarePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQSurchargeIncludedInNetFare()
    {
      return $this->QSurchargeIncludedInNetFare;
    }

    /**
     * @param boolean $QSurchargeIncludedInNetFare
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setQSurchargeIncludedInNetFare($QSurchargeIncludedInNetFare)
    {
      $this->QSurchargeIncludedInNetFare = $QSurchargeIncludedInNetFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getQSurchargePrice()
    {
      return $this->QSurchargePrice;
    }

    /**
     * @param SharedPrice $QSurchargePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setQSurchargePrice($QSurchargePrice)
    {
      $this->QSurchargePrice = $QSurchargePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuoteLink()
    {
      return $this->QuoteLink;
    }

    /**
     * @param string $QuoteLink
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setQuoteLink($QuoteLink)
    {
      $this->QuoteLink = $QuoteLink;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQuoteRequiresAdditionOfQSurcharge()
    {
      return $this->QuoteRequiresAdditionOfQSurcharge;
    }

    /**
     * @param boolean $QuoteRequiresAdditionOfQSurcharge
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setQuoteRequiresAdditionOfQSurcharge($QuoteRequiresAdditionOfQSurcharge)
    {
      $this->QuoteRequiresAdditionOfQSurcharge = $QuoteRequiresAdditionOfQSurcharge;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseSurcharge
     */
    public function getQuoteResponseSurcharges()
    {
      return $this->QuoteResponseSurcharges;
    }

    /**
     * @param ArrayOfQuoteResponseSurcharge $QuoteResponseSurcharges
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setQuoteResponseSurcharges($QuoteResponseSurcharges)
    {
      $this->QuoteResponseSurcharges = $QuoteResponseSurcharges;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseSegment
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param ArrayOfQuoteResponseSegment $Segment
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setSegment($Segment)
    {
      $this->Segment = $Segment;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getStreetFarePrice()
    {
      return $this->StreetFarePrice;
    }

    /**
     * @param SharedPrice $StreetFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setStreetFarePrice($StreetFarePrice)
    {
      $this->StreetFarePrice = $StreetFarePrice;
      return $this;
    }

    /**
     * @return ArrayOfQuoteTax
     */
    public function getTaxDetails()
    {
      return $this->TaxDetails;
    }

    /**
     * @param ArrayOfQuoteTax $TaxDetails
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setTaxDetails($TaxDetails)
    {
      $this->TaxDetails = $TaxDetails;
      return $this;
    }

    /**
     * @return QuoteResponseTicket
     */
    public function getTicketData()
    {
      return $this->TicketData;
    }

    /**
     * @param QuoteResponseTicket $TicketData
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setTicketData($TicketData)
    {
      $this->TicketData = $TicketData;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTicketingFarePrice()
    {
      return $this->TicketingFarePrice;
    }

    /**
     * @param SharedPrice $TicketingFarePrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setTicketingFarePrice($TicketingFarePrice)
    {
      $this->TicketingFarePrice = $TicketingFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTaxPrice()
    {
      return $this->TotalTaxPrice;
    }

    /**
     * @param SharedPrice $TotalTaxPrice
     * @return \App\models\ATSFlight\QuoteResponsePassenger
     */
    public function setTotalTaxPrice($TotalTaxPrice)
    {
      $this->TotalTaxPrice = $TotalTaxPrice;
      return $this;
    }

}
