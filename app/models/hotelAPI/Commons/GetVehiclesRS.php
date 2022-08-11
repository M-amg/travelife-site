<?php

namespace App\models\hotelAPI\Commons;

class GetVehiclesRS
{

    /**
     * @var VehiclesTypes[] $vehiclesType
     */
    protected $vehiclesType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VehiclesTypes[]
     */
    public function getVehiclesType()
    {
      return $this->vehiclesType;
    }

    /**
     * @param VehiclesTypes[] $vehiclesType
     * @return \App\models\hotelAPI\Commons\GetVehiclesRS
     */
    public function setVehiclesType(array $vehiclesType = null)
    {
      $this->vehiclesType = $vehiclesType;
      return $this;
    }

}
