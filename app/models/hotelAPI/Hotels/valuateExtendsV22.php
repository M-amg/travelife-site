<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV22
{

    /**
     * @var ValuationRQV22 $ValuationRQV22_1
     */
    protected $ValuationRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRQV22
     */
    public function getValuationRQV22_1()
    {
      return $this->ValuationRQV22_1;
    }

    /**
     * @param ValuationRQV22 $ValuationRQV22_1
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV22
     */
    public function setValuationRQV22_1($ValuationRQV22_1)
    {
      $this->ValuationRQV22_1 = $ValuationRQV22_1;
      return $this;
    }

}
