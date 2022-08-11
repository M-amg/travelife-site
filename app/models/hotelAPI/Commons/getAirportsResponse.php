<?php

namespace App\models\hotelAPI\Commons;

class getAirportsResponse
{

    /**
     * @var GetAirportsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAirportsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetAirportsRS $result
     * @return \App\models\hotelAPI\Commons\getAirportsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
