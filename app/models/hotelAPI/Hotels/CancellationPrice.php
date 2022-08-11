<?php

namespace App\models\hotelAPI\Hotels;

class CancellationPrice
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $applyTo
     */
    protected $applyTo = null;

    /**
     * @var float $percentage
     */
    protected $percentage = null;

    /**
     * @var int $release
     */
    protected $release = null;

    /**
     * @param float $percentage
     * @param int $release
     */
    public function __construct($percentage, $release)
    {
      $this->percentage = $percentage;
      $this->release = $release;
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
     * @return \App\models\hotelAPI\Hotels\CancellationPrice
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplyTo()
    {
      return $this->applyTo;
    }

    /**
     * @param string $applyTo
     * @return \App\models\hotelAPI\Hotels\CancellationPrice
     */
    public function setApplyTo($applyTo)
    {
      $this->applyTo = $applyTo;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
      return $this->percentage;
    }

    /**
     * @param float $percentage
     * @return \App\models\hotelAPI\Hotels\CancellationPrice
     */
    public function setPercentage($percentage)
    {
      $this->percentage = $percentage;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelease()
    {
      return $this->release;
    }

    /**
     * @param int $release
     * @return \App\models\hotelAPI\Hotels\CancellationPrice
     */
    public function setRelease($release)
    {
      $this->release = $release;
      return $this;
    }

}
