<?php

namespace App\models\hotelAPI\Basket;

class getBasketsV16
{

    /**
     * @var GetBasketsRQV16 $GetBasketsRQV16_1
     */
    protected $GetBasketsRQV16_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketsRQV16
     */
    public function getGetBasketsRQV16_1()
    {
      return $this->GetBasketsRQV16_1;
    }

    /**
     * @param GetBasketsRQV16 $GetBasketsRQV16_1
     * @return \App\models\hotelAPI\Basket\getBasketsV16
     */
    public function setGetBasketsRQV16_1($GetBasketsRQV16_1)
    {
      $this->GetBasketsRQV16_1 = $GetBasketsRQV16_1;
      return $this;
    }

}
