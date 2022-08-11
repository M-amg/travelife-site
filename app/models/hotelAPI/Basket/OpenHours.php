<?php

namespace App\models\hotelAPI\Basket;

class OpenHours
{

    /**
     * @var Amount $afterHoursCharge
     */
    protected $afterHoursCharge = null;

    /**
     * @var string $closeTime
     */
    protected $closeTime = null;

    /**
     * @var string $openTime
     */
    protected $openTime = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Amount
     */
    public function getAfterHoursCharge()
    {
      return $this->afterHoursCharge;
    }

    /**
     * @param Amount $afterHoursCharge
     * @return \App\models\hotelAPI\Basket\OpenHours
     */
    public function setAfterHoursCharge($afterHoursCharge)
    {
      $this->afterHoursCharge = $afterHoursCharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseTime()
    {
      return $this->closeTime;
    }

    /**
     * @param string $closeTime
     * @return \App\models\hotelAPI\Basket\OpenHours
     */
    public function setCloseTime($closeTime)
    {
      $this->closeTime = $closeTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenTime()
    {
      return $this->openTime;
    }

    /**
     * @param string $openTime
     * @return \App\models\hotelAPI\Basket\OpenHours
     */
    public function setOpenTime($openTime)
    {
      $this->openTime = $openTime;
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
     * @return \App\models\hotelAPI\Basket\OpenHours
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
