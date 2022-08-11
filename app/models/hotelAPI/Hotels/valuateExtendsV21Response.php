<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV21Response
{

    /**
     * @var ValuationExtendsRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRSV20 $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV21Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
