<?php

namespace App\models\hotelAPI\Basket;

class Amount
{

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param float $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \App\models\hotelAPI\Basket\Amount
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \App\models\hotelAPI\Basket\Amount
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
