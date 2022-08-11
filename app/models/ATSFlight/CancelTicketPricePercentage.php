<?php

namespace App\models\ATSFlight;

class CancelTicketPricePercentage
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $AmountIsPercentage
     */
    protected $AmountIsPercentage = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

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
     * @return \App\models\ATSFlight\CancelTicketPricePercentage
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAmountIsPercentage()
    {
      return $this->AmountIsPercentage;
    }

    /**
     * @param boolean $AmountIsPercentage
     * @return \App\models\ATSFlight\CancelTicketPricePercentage
     */
    public function setAmountIsPercentage($AmountIsPercentage)
    {
      $this->AmountIsPercentage = $AmountIsPercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\CancelTicketPricePercentage
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

}
