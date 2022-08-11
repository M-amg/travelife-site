<?php

namespace App\models\hotelAPI\Basket;

class cancelV2Response
{

    /**
     * @var CancelRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelRSV17 $result
     * @return \App\models\hotelAPI\Basket\cancelV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
