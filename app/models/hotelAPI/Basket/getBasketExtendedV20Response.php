<?php

namespace App\models\hotelAPI\Basket;

class getBasketExtendedV20Response
{

    /**
     * @var GetBasketExtendsRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketExtendsRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketExtendsRSV20 $result
     * @return \App\models\hotelAPI\Basket\getBasketExtendedV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
