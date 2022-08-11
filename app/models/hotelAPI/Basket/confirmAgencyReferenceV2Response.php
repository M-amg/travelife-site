<?php

namespace App\models\hotelAPI\Basket;

class confirmAgencyReferenceV2Response
{

    /**
     * @var ConfirmRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmRSV17 $result
     * @return \App\models\hotelAPI\Basket\confirmAgencyReferenceV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
