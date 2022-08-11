<?php

namespace App\models\hotelAPI\Hotels;

class Rates
{

    /**
     * @var string[] $rate
     */
    protected $rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param string[] $rate
     * @return \App\models\hotelAPI\Hotels\Rates
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

}
