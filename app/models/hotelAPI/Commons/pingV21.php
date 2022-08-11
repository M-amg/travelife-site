<?php

namespace App\models\hotelAPI\Commons;

class pingV21
{

    /**
     * @var PingRQV21 $PingRQV21_1
     */
    protected $PingRQV21_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PingRQV21
     */
    public function getPingRQV21_1()
    {
      return $this->PingRQV21_1;
    }

    /**
     * @param PingRQV21 $PingRQV21_1
     * @return \App\models\hotelAPI\Commons\pingV21
     */
    public function setPingRQV21_1($PingRQV21_1)
    {
      $this->PingRQV21_1 = $PingRQV21_1;
      return $this;
    }

}
