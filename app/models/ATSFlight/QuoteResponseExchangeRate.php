<?php

namespace App\models\ATSFlight;

class QuoteResponseExchangeRate
{

    /**
     * @var int $Decimals
     */
    protected $Decimals = null;

    /**
     * @var string $FromCurrency
     */
    protected $FromCurrency = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var string $Rounding
     */
    protected $Rounding = null;

    /**
     * @var string $Roundstring
     */
    protected $Roundstring = null;

    /**
     * @var string $ToCurrency
     */
    protected $ToCurrency = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setDecimals($Decimals)
    {
      $this->Decimals = $Decimals;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromCurrency()
    {
      return $this->FromCurrency;
    }

    /**
     * @param string $FromCurrency
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setFromCurrency($FromCurrency)
    {
      $this->FromCurrency = $FromCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRounding()
    {
      return $this->Rounding;
    }

    /**
     * @param string $Rounding
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setRounding($Rounding)
    {
      $this->Rounding = $Rounding;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoundstring()
    {
      return $this->Roundstring;
    }

    /**
     * @param string $Roundstring
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setRoundstring($Roundstring)
    {
      $this->Roundstring = $Roundstring;
      return $this;
    }

    /**
     * @return string
     */
    public function getToCurrency()
    {
      return $this->ToCurrency;
    }

    /**
     * @param string $ToCurrency
     * @return \App\models\ATSFlight\QuoteResponseExchangeRate
     */
    public function setToCurrency($ToCurrency)
    {
      $this->ToCurrency = $ToCurrency;
      return $this;
    }

}
