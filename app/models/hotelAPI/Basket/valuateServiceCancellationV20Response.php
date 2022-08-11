<?php

namespace App\models\hotelAPI\Basket;

class valuateServiceCancellationV20Response
{

    /**
     * @var ValuateServiceCancellationRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateServiceCancellationRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateServiceCancellationRSV20 $result
     * @return \App\models\hotelAPI\Basket\valuateServiceCancellationV20Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
