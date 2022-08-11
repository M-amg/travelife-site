<?php

namespace App\models\ATSFlight;

class CurrencyData
{

    /**
     * @var duration $CacheDuration
     */
    protected $CacheDuration = null;

    /**
     * @var int $Decimals
     */
    protected $Decimals = null;

    /**
     * @var SharedPrice $OriginalPrice
     */
    protected $OriginalPrice = null;

    /**
     * @var string $RequestedCurrencyCode
     */
    protected $RequestedCurrencyCode = null;

    /**
     * @var RoundingModeEnum $Rounding
     */
    protected $Rounding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return duration
     */
    public function getCacheDuration()
    {
      return $this->CacheDuration;
    }

    /**
     * @param duration $CacheDuration
     * @return \App\models\ATSFlight\CurrencyData
     */
    public function setCacheDuration($CacheDuration)
    {
      $this->CacheDuration = $CacheDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimals()
    {
      return $this->Decimals;
    }

    /**
     * @param int $Decimals
     * @return \App\models\ATSFlight\CurrencyData
     */
    public function setDecimals($Decimals)
    {
      $this->Decimals = $Decimals;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getOriginalPrice()
    {
      return $this->OriginalPrice;
    }

    /**
     * @param SharedPrice $OriginalPrice
     * @return \App\models\ATSFlight\CurrencyData
     */
    public function setOriginalPrice($OriginalPrice)
    {
      $this->OriginalPrice = $OriginalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestedCurrencyCode()
    {
      return $this->RequestedCurrencyCode;
    }

    /**
     * @param string $RequestedCurrencyCode
     * @return \App\models\ATSFlight\CurrencyData
     */
    public function setRequestedCurrencyCode($RequestedCurrencyCode)
    {
      $this->RequestedCurrencyCode = $RequestedCurrencyCode;
      return $this;
    }

    /**
     * @return RoundingModeEnum
     */
    public function getRounding()
    {
      return $this->Rounding;
    }

    /**
     * @param RoundingModeEnum $Rounding
     * @return \App\models\ATSFlight\CurrencyData
     */
    public function setRounding($Rounding)
    {
      $this->Rounding = $Rounding;
      return $this;
    }

}
