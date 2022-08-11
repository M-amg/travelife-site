<?php

namespace App\models\hotelAPI\Basket;

class getBasketsV22Response
{

    /**
     * @var GetBasketsRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketsRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketsRSV22 $result
     * @return \App\models\hotelAPI\Basket\getBasketsV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
