<?php

namespace App\models\hotelAPI\Basket;

class CancellationTerm
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $appliableTo
     */
    protected $appliableTo = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

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
     * @return \App\models\hotelAPI\Basket\CancellationTerm
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppliableTo()
    {
      return $this->appliableTo;
    }

    /**
     * @param string $appliableTo
     * @return \App\models\hotelAPI\Basket\CancellationTerm
     */
    public function setAppliableTo($appliableTo)
    {
      $this->appliableTo = $appliableTo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \App\models\hotelAPI\Basket\CancellationTerm
     */
    public function setFrom(\DateTime $from = null)
    {
      if ($from == null) {
       $this->from = null;
      } else {
        $this->from = $from->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Basket\CancellationTerm
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
      return $this;
    }

}
