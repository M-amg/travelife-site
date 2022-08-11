<?php

namespace App\models\ATSFlight;

class PriceData
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \App\models\ATSFlight\PriceData
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\PriceData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
