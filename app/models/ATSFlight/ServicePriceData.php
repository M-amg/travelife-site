<?php

namespace App\models\ATSFlight;

class ServicePriceData
{

    /**
     * @var SharedPrice $EquivalentPrice
     */
    protected $EquivalentPrice = null;

    /**
     * @var SharedPrice $Price
     */
    protected $Price = null;

    /**
     * @var string $PriceID
     */
    protected $PriceID = null;

    /**
     * @var string $PriceName
     */
    protected $PriceName = null;

    /**
     * @var string $PriceRemark
     */
    protected $PriceRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPrice()
    {
      return $this->EquivalentPrice;
    }

    /**
     * @param SharedPrice $EquivalentPrice
     * @return \App\models\ATSFlight\ServicePriceData
     */
    public function setEquivalentPrice($EquivalentPrice)
    {
      $this->EquivalentPrice = $EquivalentPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param SharedPrice $Price
     * @return \App\models\ATSFlight\ServicePriceData
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceID()
    {
      return $this->PriceID;
    }

    /**
     * @param string $PriceID
     * @return \App\models\ATSFlight\ServicePriceData
     */
    public function setPriceID($PriceID)
    {
      $this->PriceID = $PriceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceName()
    {
      return $this->PriceName;
    }

    /**
     * @param string $PriceName
     * @return \App\models\ATSFlight\ServicePriceData
     */
    public function setPriceName($PriceName)
    {
      $this->PriceName = $PriceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceRemark()
    {
      return $this->PriceRemark;
    }

    /**
     * @param string $PriceRemark
     * @return \App\models\ATSFlight\ServicePriceData
     */
    public function setPriceRemark($PriceRemark)
    {
      $this->PriceRemark = $PriceRemark;
      return $this;
    }

}
