<?php

namespace App\models\hotelAPI\Commons;

class getVehiclesTypesResponse
{

    /**
     * @var GetVehiclesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetVehiclesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetVehiclesRS $result
     * @return \App\models\hotelAPI\Commons\getVehiclesTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
