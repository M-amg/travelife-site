<?php

namespace App\models\hotelAPI\Basket;

class valuateCancellationV22Response
{

    /**
     * @var ValuateCancellationRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateCancellationRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuateCancellationRSV22 $result
     * @return \App\models\hotelAPI\Basket\valuateCancellationV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
