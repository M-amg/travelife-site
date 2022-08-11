<?php

namespace App\models\hotelAPI\Basket;

class getBasketExtendedV2Response
{

    /**
     * @var GetBasketExtendedRSV12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketExtendedRSV12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketExtendedRSV12 $result
     * @return \App\models\hotelAPI\Basket\getBasketExtendedV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
