<?php

namespace App\models\hotelAPI\Basket;

class cancelV20Response
{

    /**
     * @var CancelRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelRSV20 $result
     * @return \App\models\hotelAPI\Basket\cancelV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
