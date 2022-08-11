<?php

namespace App\models\hotelAPI\Basket;

class getBasketExtendedV3Response
{

    /**
     * @var GetBasketExtendsRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketExtendsRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketExtendsRSV17 $result
     * @return \App\models\hotelAPI\Basket\getBasketExtendedV3Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
