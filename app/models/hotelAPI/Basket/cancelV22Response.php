<?php

namespace App\models\hotelAPI\Basket;

class cancelV22Response
{

    /**
     * @var CancelRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelRSV22 $result
     * @return \App\models\hotelAPI\Basket\cancelV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
