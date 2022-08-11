<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceV22Response
{

    /**
     * @var CancelServiceRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelServiceRSV22 $result
     * @return \App\models\hotelAPI\Basket\cancelServiceV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
