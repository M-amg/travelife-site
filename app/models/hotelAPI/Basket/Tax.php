<?php

namespace App\models\hotelAPI\Basket;

class Tax
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var string $dateTo
     */
    protected $dateTo = null;

    /**
     * @var float $maxRoomRate
     */
    protected $maxRoomRate = null;

    /**
     * @var float $minRoomRate
     */
    protected $minRoomRate = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param string $dateTo
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxRoomRate()
    {
      return $this->maxRoomRate;
    }

    /**
     * @param float $maxRoomRate
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setMaxRoomRate($maxRoomRate)
    {
      $this->maxRoomRate = $maxRoomRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinRoomRate()
    {
      return $this->minRoomRate;
    }

    /**
     * @param float $minRoomRate
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setMinRoomRate($minRoomRate)
    {
      $this->minRoomRate = $minRoomRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \App\models\hotelAPI\Basket\Tax
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
