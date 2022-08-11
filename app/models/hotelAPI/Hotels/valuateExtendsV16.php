<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV16
{

    /**
     * @var ValuationRQV15 $ValuationRQV15_1
     */
    protected $ValuationRQV15_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRQV15
     */
    public function getValuationRQV15_1()
    {
      return $this->ValuationRQV15_1;
    }

    /**
     * @param ValuationRQV15 $ValuationRQV15_1
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV16
     */
    public function setValuationRQV15_1($ValuationRQV15_1)
    {
      $this->ValuationRQV15_1 = $ValuationRQV15_1;
      return $this;
    }

}
