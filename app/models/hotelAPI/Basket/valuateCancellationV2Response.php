<?php

namespace App\models\hotelAPI\Basket;

class valuateCancellationV2Response
{

    /**
     * @var ValuateCancellationRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateCancellationRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateCancellationRSV17 $result
     * @return \App\models\hotelAPI\Basket\valuateCancellationV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
