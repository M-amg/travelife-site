<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV15Response
{

    /**
     * @var ValuationExtendsRSV15 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRSV15
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRSV15 $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV15Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
