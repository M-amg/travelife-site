<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV21
{

    /**
     * @var ValuationRQV21 $ValuationRQV21_1
     */
    protected $ValuationRQV21_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRQV21
     */
    public function getValuationRQV21_1()
    {
      return $this->ValuationRQV21_1;
    }

    /**
     * @param ValuationRQV21 $ValuationRQV21_1
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV21
     */
    public function setValuationRQV21_1($ValuationRQV21_1)
    {
      $this->ValuationRQV21_1 = $ValuationRQV21_1;
      return $this;
    }

}
