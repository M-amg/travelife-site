<?php

namespace App\models\ATSFlight;

class TaxResponsePassenger
{

    /**
     * @var ArrayOfTaxDetail $DetailedTaxes
     */
    protected $DetailedTaxes = null;

    /**
     * @var string $PublishedFareBase
     */
    protected $PublishedFareBase = null;

    /**
     * @var SharedPrice $PublishedFarePrice
     */
    protected $PublishedFarePrice = null;

    /**
     * @var SharedPrice $QSurcharge
     */
    protected $QSurcharge = null;

    /**
     * @var ArrayOfSurchargeDetail $SurchargeDetails
     */
    protected $SurchargeDetails = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var PassengerTypeEnum $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getDetailedTaxes()
    {
      return $this->DetailedTaxes;
    }

    /**
     * @param ArrayOfTaxDetail $DetailedTaxes
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setDetailedTaxes($DetailedTaxes)
    {
      $this->DetailedTaxes = $DetailedTaxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublishedFareBase()
    {
      return $this->PublishedFareBase;
    }

    /**
     * @param string $PublishedFareBase
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setPublishedFareBase($PublishedFareBase)
    {
      $this->PublishedFareBase = $PublishedFareBase;
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
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setPublishedFarePrice($PublishedFarePrice)
    {
      $this->PublishedFarePrice = $PublishedFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getQSurcharge()
    {
      return $this->QSurcharge;
    }

    /**
     * @param SharedPrice $QSurcharge
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setQSurcharge($QSurcharge)
    {
      $this->QSurcharge = $QSurcharge;
      return $this;
    }

    /**
     * @return ArrayOfSurchargeDetail
     */
    public function getSurchargeDetails()
    {
      return $this->SurchargeDetails;
    }

    /**
     * @param ArrayOfSurchargeDetail $SurchargeDetails
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setSurchargeDetails($SurchargeDetails)
    {
      $this->SurchargeDetails = $SurchargeDetails;
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
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PassengerTypeEnum $Type
     * @return \App\models\ATSFlight\TaxResponsePassenger
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
