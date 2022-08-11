<?php

namespace App\models\hotelAPI\Commons;

class getAirportTypesResponse
{

    /**
     * @var GetAirportTypesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAirportTypesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetAirportTypesRS $result
     * @return \App\models\hotelAPI\Commons\getAirportTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
