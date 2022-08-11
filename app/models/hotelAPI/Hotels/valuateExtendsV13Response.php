<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsV13Response
{

    /**
     * @var ValuationExtendsRSv12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRSv12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRSv12 $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsV13Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
