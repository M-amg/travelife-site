<?php

namespace App\models\hotelAPI\Hotels;

class getPOResponse
{

    /**
     * @var GetPORS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPORS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetPORS $result
     * @return \App\models\hotelAPI\Hotels\getPOResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
