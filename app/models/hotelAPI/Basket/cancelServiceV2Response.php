<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceV2Response
{

    /**
     * @var CancelServiceRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param CancelServiceRSV17 $result
     * @return \App\models\hotelAPI\Basket\cancelServiceV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
