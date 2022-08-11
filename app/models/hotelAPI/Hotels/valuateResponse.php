<?php

namespace App\models\hotelAPI\Hotels;

class valuateResponse
{

    /**
     * @var ValuationRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationRS $result
     * @return \App\models\hotelAPI\Hotels\valuateResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
