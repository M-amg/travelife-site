<?php

namespace App\models\hotelAPI\Basket;

class confirmAgencyReferenceV20Response
{

    /**
     * @var ConfirmRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmRSV20 $result
     * @return \App\models\hotelAPI\Basket\confirmAgencyReferenceV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
