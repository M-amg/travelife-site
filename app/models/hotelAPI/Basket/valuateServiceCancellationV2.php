<?php

namespace App\models\hotelAPI\Basket;

class valuateServiceCancellationV2
{

    /**
     * @var ValuateServiceCancellationRQ $ValuateServiceCancellationRQ_1
     */
    protected $ValuateServiceCancellationRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateServiceCancellationRQ
     */
    public function getValuateServiceCancellationRQ_1()
    {
      return $this->ValuateServiceCancellationRQ_1;
    }

    /**
     * @param ValuateServiceCancellationRQ $ValuateServiceCancellationRQ_1
     * @return \App\models\hotelAPI\Basket\valuateServiceCancellationV2
     */
    public function setValuateServiceCancellationRQ_1($ValuateServiceCancellationRQ_1)
    {
      $this->ValuateServiceCancellationRQ_1 = $ValuateServiceCancellationRQ_1;
      return $this;
    }

}
