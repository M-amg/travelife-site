<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceResponse
{

    /**
     * @var CancelServiceRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelServiceRS $result
     * @return \App\models\hotelAPI\Basket\cancelServiceResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
