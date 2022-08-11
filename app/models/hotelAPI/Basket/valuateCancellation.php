<?php

namespace App\models\hotelAPI\Basket;

class valuateCancellation
{

    /**
     * @var ValuateCancellationRQ $ValuateCancellationRQ_1
     */
    protected $ValuateCancellationRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuateCancellationRQ
     */
    public function getValuateCancellationRQ_1()
    {
      return $this->ValuateCancellationRQ_1;
    }

    /**
     * @param ValuateCancellationRQ $ValuateCancellationRQ_1
     * @return \App\models\hotelAPI\Basket\valuateCancellation
     */
    public function setValuateCancellationRQ_1($ValuateCancellationRQ_1)
    {
      $this->ValuateCancellationRQ_1 = $ValuateCancellationRQ_1;
      return $this;
    }

}
