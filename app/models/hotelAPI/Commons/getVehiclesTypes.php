<?php

namespace App\models\hotelAPI\Commons;

class getVehiclesTypes
{

    /**
     * @var GetVehiclesRQ $GetVehiclesRQ_1
     */
    protected $GetVehiclesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetVehiclesRQ
     */
    public function getGetVehiclesRQ_1()
    {
      return $this->GetVehiclesRQ_1;
    }

    /**
     * @param GetVehiclesRQ $GetVehiclesRQ_1
     * @return \App\models\hotelAPI\Commons\getVehiclesTypes
     */
    public function setGetVehiclesRQ_1($GetVehiclesRQ_1)
    {
      $this->GetVehiclesRQ_1 = $GetVehiclesRQ_1;
      return $this;
    }

}
