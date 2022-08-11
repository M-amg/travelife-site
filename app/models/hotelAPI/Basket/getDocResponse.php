<?php

namespace App\models\hotelAPI\Basket;

class getDocResponse
{

    /**
     * @var GetDocRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetDocRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetDocRS $result
     * @return \App\models\hotelAPI\Basket\getDocResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
