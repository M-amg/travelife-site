<?php

namespace App\models\hotelAPI\Basket;

class valuateCancellationResponse
{

    /**
     * @var ValuateCancellationRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateCancellationRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateCancellationRS $result
     * @return \App\models\hotelAPI\Basket\valuateCancellationResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
