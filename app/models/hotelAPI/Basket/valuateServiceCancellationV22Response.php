<?php

namespace App\models\hotelAPI\Basket;

class valuateServiceCancellationV22Response
{

    /**
     * @var ValuateServiceCancellationRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateServiceCancellationRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateServiceCancellationRSV22 $result
     * @return \App\models\hotelAPI\Basket\valuateServiceCancellationV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
