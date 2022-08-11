<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV16Response
{

    /**
     * @var ValuationExtendsRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRSV17 $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV16Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
