<?php

namespace App\models\hotelAPI\Basket;

class getBasketExtendedV2
{

    /**
     * @var GetBasketRQ $GetBasketRQ_1
     */
    protected $GetBasketRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketRQ
     */
    public function getGetBasketRQ_1()
    {
      return $this->GetBasketRQ_1;
    }

    /**
     * @param GetBasketRQ $GetBasketRQ_1
     * @return \App\models\hotelAPI\Basket\getBasketExtendedV2
     */
    public function setGetBasketRQ_1($GetBasketRQ_1)
    {
      $this->GetBasketRQ_1 = $GetBasketRQ_1;
      return $this;
    }

}
