<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsCompatibilityQueryResponse
{

    /**
     * @var AvailableHotelsCompatibilityQueryRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsCompatibilityQueryRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailableHotelsCompatibilityQueryRS $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsCompatibilityQueryResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
