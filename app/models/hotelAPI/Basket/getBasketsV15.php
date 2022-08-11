<?php

namespace App\models\hotelAPI\Basket;

class getBasketsV15
{

    /**
     * @var GetBasketsRQ $GetBasketsRQ_1
     */
    protected $GetBasketsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketsRQ
     */
    public function getGetBasketsRQ_1()
    {
      return $this->GetBasketsRQ_1;
    }

    /**
     * @param GetBasketsRQ $GetBasketsRQ_1
     * @return \App\models\hotelAPI\Basket\getBasketsV15
     */
    public function setGetBasketsRQ_1($GetBasketsRQ_1)
    {
      $this->GetBasketsRQ_1 = $GetBasketsRQ_1;
      return $this;
    }

}
