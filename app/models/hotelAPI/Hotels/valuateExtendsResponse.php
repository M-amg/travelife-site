<?php

namespace App\models\hotelAPI\Hotels;

class valuateExtendsResponse
{

    /**
     * @var ValuationExtendsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ValuationExtendsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ValuationExtendsRS $result
     * @return \App\models\hotelAPI\Hotels\valuateExtendsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
