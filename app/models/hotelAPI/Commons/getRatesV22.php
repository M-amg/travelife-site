<?php

namespace App\models\hotelAPI\Commons;

class getRatesV22
{

    /**
     * @var RatesRQV22 $RatesRQV22_1
     */
    protected $RatesRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatesRQV22
     */
    public function getRatesRQV22_1()
    {
      return $this->RatesRQV22_1;
    }

    /**
     * @param RatesRQV22 $RatesRQV22_1
     * @return \App\models\hotelAPI\Commons\getRatesV22
     */
    public function setRatesRQV22_1($RatesRQV22_1)
    {
      $this->RatesRQV22_1 = $RatesRQV22_1;
      return $this;
    }

}
