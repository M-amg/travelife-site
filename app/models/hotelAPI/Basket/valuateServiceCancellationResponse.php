<?php

namespace App\models\hotelAPI\Basket;

class valuateServiceCancellationResponse
{

    /**
     * @var ValuateServiceCancellationRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateServiceCancellationRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateServiceCancellationRS $result
     * @return \App\models\hotelAPI\Basket\valuateServiceCancellationResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
