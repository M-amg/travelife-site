<?php

namespace App\models\hotelAPI\Basket;

class getBaskets
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
     * @return \App\models\hotelAPI\Basket\getBaskets
     */
    public function setGetBasketsRQ_1($GetBasketsRQ_1)
    {
      $this->GetBasketsRQ_1 = $GetBasketsRQ_1;
      return $this;
    }

}
