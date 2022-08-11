<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV20
{

    /**
     * @var ValuationRQV20 $ValuationRQV20_1
     */
    protected $ValuationRQV20_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRQV20
     */
    public function getValuationRQV20_1()
    {
      return $this->ValuationRQV20_1;
    }

    /**
     * @param ValuationRQV20 $ValuationRQV20_1
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV20
     */
    public function setValuationRQV20_1($ValuationRQV20_1)
    {
      $this->ValuationRQV20_1 = $ValuationRQV20_1;
      return $this;
    }

}
