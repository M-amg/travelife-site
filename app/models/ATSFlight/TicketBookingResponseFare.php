<?php

namespace App\models\ATSFlight;

class TicketBookingResponseFare
{

    /**
     * @var SharedPrice $EquivalentFare
     */
    protected $EquivalentFare = null;

    /**
     * @var SharedPrice $EquivalentTotal
     */
    protected $EquivalentTotal = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

    /**
     * @var SharedPrice $Fare
     */
    protected $Fare = null;

    /**
     * @var SharedPrice $GrandTotal
     */
    protected $GrandTotal = null;

    /**
     * @var ArrayOfDetailedPaymentMethod $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var SharedPrice $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var ArrayOfTaxDetail $TaxDetails
     */
    protected $TaxDetails = null;

    /**
     * @var SharedPrice $Total
     */
    protected $Total = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentFare()
    {
      return $this->EquivalentFare;
    }

    /**
     * @param SharedPrice $EquivalentFare
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setEquivalentFare($EquivalentFare)
    {
      $this->EquivalentFare = $EquivalentFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotal()
    {
      return $this->EquivalentTotal;
    }

    /**
     * @param SharedPrice $EquivalentTotal
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setEquivalentTotal($EquivalentTotal)
    {
      $this->EquivalentTotal = $EquivalentTotal;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param SharedPrice $Fare
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getGrandTotal()
    {
      return $this->GrandTotal;
    }

    /**
     * @param SharedPrice $GrandTotal
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setGrandTotal($GrandTotal)
    {
      $this->GrandTotal = $GrandTotal;
      return $this;
    }

    /**
     * @return ArrayOfDetailedPaymentMethod
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param ArrayOfDetailedPaymentMethod $PaymentMethods
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param SharedPrice $Surcharges
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getTaxDetails()
    {
      return $this->TaxDetails;
    }

    /**
     * @param ArrayOfTaxDetail $TaxDetails
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setTaxDetails($TaxDetails)
    {
      $this->TaxDetails = $TaxDetails;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param SharedPrice $Total
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\TicketBookingResponseFare
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
