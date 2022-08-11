<?php

namespace App\models\hotelAPI\Basket;

class valuateCancellationV20Response
{

    /**
     * @var ValuateCancellationRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateCancellationRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateCancellationRSV20 $result
     * @return \App\models\hotelAPI\Basket\valuateCancellationV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
