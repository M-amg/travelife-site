<?php

namespace App\models\hotelAPI\Commons;

class getGeographicalMapResponse
{

    /**
     * @var GetGeographicalMapRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetGeographicalMapRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetGeographicalMapRS $result
     * @return \App\models\hotelAPI\Commons\getGeographicalMapResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
