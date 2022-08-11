<?php

namespace App\models\hotelAPI\Hotels;

class ValuationSupplement
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $character
     */
    protected $character = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

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
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharacter()
    {
      return $this->character;
    }

    /**
     * @param string $character
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setCharacter($character)
    {
      $this->character = $character;
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
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
      if ($fromDate == null) {
       $this->fromDate = null;
      } else {
        $this->fromDate = $fromDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
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
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->toDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toDate
     * @return \App\models\hotelAPI\Hotels\ValuationSupplement
     */
    public function setToDate(\DateTime $toDate = null)
    {
      if ($toDate == null) {
       $this->toDate = null;
      } else {
        $this->toDate = $toDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
