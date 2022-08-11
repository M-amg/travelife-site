<?php

namespace App\models\hotelAPI\Hotels;

class SupplementPrice
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
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var float $percentage
     */
    protected $percentage = null;

    /**
     * @var Supplement $supplement
     */
    protected $supplement = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @param float $percentage
     */
    public function __construct($percentage)
    {
      $this->percentage = $percentage;
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
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
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
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
     */
    public function setApplyTo($applyTo)
    {
      $this->applyTo = $applyTo;
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
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
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
     * @return float
     */
    public function getPercentage()
    {
      return $this->percentage;
    }

    /**
     * @param float $percentage
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
     */
    public function setPercentage($percentage)
    {
      $this->percentage = $percentage;
      return $this;
    }

    /**
     * @return Supplement
     */
    public function getSupplement()
    {
      return $this->supplement;
    }

    /**
     * @param Supplement $supplement
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
     */
    public function setSupplement($supplement)
    {
      $this->supplement = $supplement;
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
     * @return \App\models\hotelAPI\Hotels\SupplementPrice
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
