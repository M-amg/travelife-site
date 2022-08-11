<?php

namespace App\models\ATSFlight;

class CreditCardData
{

    /**
     * @var CreditCard $Brand
     */
    protected $Brand = null;

    /**
     * @var string $CVC
     */
    protected $CVC = null;

    /**
     * @var string $CardHolderDescription
     */
    protected $CardHolderDescription = null;

    /**
     * @var int $ExpiryMonth
     */
    protected $ExpiryMonth = null;

    /**
     * @var int $ExpiryYear
     */
    protected $ExpiryYear = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $VirtualCCReference
     */
    protected $VirtualCCReference = null;

    /**
     * @param CreditCard $Brand
     * @param int $ExpiryMonth
     * @param int $ExpiryYear
     */
    public function __construct($Brand, $ExpiryMonth, $ExpiryYear)
    {
      $this->Brand = $Brand;
      $this->ExpiryMonth = $ExpiryMonth;
      $this->ExpiryYear = $ExpiryYear;
    }

    /**
     * @return CreditCard
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param CreditCard $Brand
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return string
     */
    public function getCVC()
    {
      return $this->CVC;
    }

    /**
     * @param string $CVC
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setCVC($CVC)
    {
      $this->CVC = $CVC;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardHolderDescription()
    {
      return $this->CardHolderDescription;
    }

    /**
     * @param string $CardHolderDescription
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setCardHolderDescription($CardHolderDescription)
    {
      $this->CardHolderDescription = $CardHolderDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpiryMonth()
    {
      return $this->ExpiryMonth;
    }

    /**
     * @param int $ExpiryMonth
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setExpiryMonth($ExpiryMonth)
    {
      $this->ExpiryMonth = $ExpiryMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpiryYear()
    {
      return $this->ExpiryYear;
    }

    /**
     * @param int $ExpiryYear
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setExpiryYear($ExpiryYear)
    {
      $this->ExpiryYear = $ExpiryYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getVirtualCCReference()
    {
      return $this->VirtualCCReference;
    }

    /**
     * @param string $VirtualCCReference
     * @return \App\models\ATSFlight\CreditCardData
     */
    public function setVirtualCCReference($VirtualCCReference)
    {
      $this->VirtualCCReference = $VirtualCCReference;
      return $this;
    }

}
