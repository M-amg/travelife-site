<?php

namespace App\models\hotelAPI\Basket;

class getBasketExtendedResponse
{

    /**
     * @var GetBasketExtendedRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketExtendedRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketExtendedRS $result
     * @return \App\models\hotelAPI\Basket\getBasketExtendedResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
