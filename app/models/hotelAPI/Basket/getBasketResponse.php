<?php

namespace App\models\hotelAPI\Basket;

class getBasketResponse
{

    /**
     * @var GetBasketRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketRS $result
     * @return \App\models\hotelAPI\Basket\getBasketResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
