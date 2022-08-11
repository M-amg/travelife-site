<?php

namespace App\models\hotelAPI\Basket;

class getBasketsV15Response
{

    /**
     * @var GetBasketsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBasketsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBasketsRS $result
     * @return \App\models\hotelAPI\Basket\getBasketsV15Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
