<?php

namespace App\models\hotelAPI\Hotels;

class getPricesResponse
{

    /**
     * @var GetPricesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPricesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetPricesRS $result
     * @return \App\models\hotelAPI\Hotels\getPricesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
