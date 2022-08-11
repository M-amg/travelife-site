<?php

namespace App\models\hotelAPI\Commons;

class getZonesResponse
{

    /**
     * @var GetZonesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetZonesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetZonesRS $result
     * @return \App\models\hotelAPI\Commons\getZonesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
