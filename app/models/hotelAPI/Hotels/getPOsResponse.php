<?php

namespace App\models\hotelAPI\Hotels;

class getPOsResponse
{

    /**
     * @var GetPOsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPOsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetPOsRS $result
     * @return \App\models\hotelAPI\Hotels\getPOsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
