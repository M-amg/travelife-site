<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV22Response
{

    /**
     * @var ValuationExtendsRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRSV22 $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
