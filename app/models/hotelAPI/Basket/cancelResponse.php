<?php

namespace App\models\hotelAPI\Basket;

class cancelResponse
{

    /**
     * @var CancelRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelRS $result
     * @return \App\models\hotelAPI\Basket\cancelResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
