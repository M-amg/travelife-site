<?php

namespace App\models\hotelAPI\Basket;

class Commision
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var float $percent
     */
    protected $percent = null;

    /**
     * @param float $percent
     */
    public function __construct($percent)
    {
      $this->percent = $percent;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return \App\models\hotelAPI\Basket\Commision
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->percent;
    }

    /**
     * @param float $percent
     * @return \App\models\hotelAPI\Basket\Commision
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

}
