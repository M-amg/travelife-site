<?php

namespace App\models\ATSFlight;

class FareResponseLegPassenger
{

    /**
     * @var SharedPrice $LegEquivFarePrice
     */
    protected $LegEquivFarePrice = null;

    /**
     * @var SharedPrice $LegEquivTaxPrice
     */
    protected $LegEquivTaxPrice = null;

    /**
     * @var SharedPrice $LegFarePrice
     */
    protected $LegFarePrice = null;

    /**
     * @var string $LegPassengerTypeCode
     */
    protected $LegPassengerTypeCode = null;

    /**
     * @var PassengerTypeEnum $LegPassengerTypeName
     */
    protected $LegPassengerTypeName = null;

    /**
     * @var SharedPrice $LegTaxPrice
     */
    protected $LegTaxPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getLegEquivFarePrice()
    {
      return $this->LegEquivFarePrice;
    }

    /**
     * @param SharedPrice $LegEquivFarePrice
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegEquivFarePrice($LegEquivFarePrice)
    {
      $this->LegEquivFarePrice = $LegEquivFarePrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getLegEquivTaxPrice()
    {
      return $this->LegEquivTaxPrice;
    }

    /**
     * @param SharedPrice $LegEquivTaxPrice
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegEquivTaxPrice($LegEquivTaxPrice)
    {
      $this->LegEquivTaxPrice = $LegEquivTaxPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getLegFarePrice()
    {
      return $this->LegFarePrice;
    }

    /**
     * @param SharedPrice $LegFarePrice
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegFarePrice($LegFarePrice)
    {
      $this->LegFarePrice = $LegFarePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegPassengerTypeCode()
    {
      return $this->LegPassengerTypeCode;
    }

    /**
     * @param string $LegPassengerTypeCode
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegPassengerTypeCode($LegPassengerTypeCode)
    {
      $this->LegPassengerTypeCode = $LegPassengerTypeCode;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getLegPassengerTypeName()
    {
      return $this->LegPassengerTypeName;
    }

    /**
     * @param PassengerTypeEnum $LegPassengerTypeName
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegPassengerTypeName($LegPassengerTypeName)
    {
      $this->LegPassengerTypeName = $LegPassengerTypeName;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getLegTaxPrice()
    {
      return $this->LegTaxPrice;
    }

    /**
     * @param SharedPrice $LegTaxPrice
     * @return \App\models\ATSFlight\FareResponseLegPassenger
     */
    public function setLegTaxPrice($LegTaxPrice)
    {
      $this->LegTaxPrice = $LegTaxPrice;
      return $this;
    }

}
