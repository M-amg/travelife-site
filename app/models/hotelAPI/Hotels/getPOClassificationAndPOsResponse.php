<?php

namespace App\models\hotelAPI\Hotels;

class getPOClassificationAndPOsResponse
{

    /**
     * @var GetPOClassificationRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPOClassificationRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetPOClassificationRS $result
     * @return \App\models\hotelAPI\Hotels\getPOClassificationAndPOsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
