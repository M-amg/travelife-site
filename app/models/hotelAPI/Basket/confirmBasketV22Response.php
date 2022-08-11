<?php

namespace App\models\hotelAPI\Basket;

class confirmBasketV22Response
{

    /**
     * @var ConfirmBasketRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmBasketRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmBasketRSV22 $result
     * @return \App\models\hotelAPI\Basket\confirmBasketV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
