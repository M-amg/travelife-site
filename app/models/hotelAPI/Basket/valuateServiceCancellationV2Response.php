<?php

namespace App\models\hotelAPI\Basket;

class valuateServiceCancellationV2Response
{

    /**
     * @var ValuateServiceCancellationRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateServiceCancellationRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateServiceCancellationRSV17 $result
     * @return \App\models\hotelAPI\Basket\valuateServiceCancellationV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
