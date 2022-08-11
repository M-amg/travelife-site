<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceV20Response
{

    /**
     * @var CancelServiceRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelServiceRSV20 $result
     * @return \App\models\hotelAPI\Basket\cancelServiceV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
