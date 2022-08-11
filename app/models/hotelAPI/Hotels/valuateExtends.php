<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtends
{

    /**
     * @var ValuationRQ $ValuationRQ_1
     */
    protected $ValuationRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRQ
     */
    public function getValuationRQ_1()
    {
      return $this->ValuationRQ_1;
    }

    /**
     * @param ValuationRQ $ValuationRQ_1
     * @return \App\models\hotelAPI\Hotels\valuateExtends
     */
    public function setValuationRQ_1($ValuationRQ_1)
    {
      $this->ValuationRQ_1 = $ValuationRQ_1;
      return $this;
    }

}
