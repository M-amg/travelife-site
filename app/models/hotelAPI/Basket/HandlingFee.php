<?php

namespace App\models\hotelAPI\Basket;

class HandlingFee
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @param float $quantity
     */
    public function __construct($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \App\models\hotelAPI\Basket\HandlingFee
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Basket\HandlingFee
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Basket\HandlingFee
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \App\models\hotelAPI\Basket\HandlingFee
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
