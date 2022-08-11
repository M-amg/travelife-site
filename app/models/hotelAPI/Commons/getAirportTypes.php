<?php

namespace App\models\hotelAPI\Commons;

class getAirportTypes
{

    /**
     * @var GetAirportTypesRQ $GetAirportTypesRQ_1
     */
    protected $GetAirportTypesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAirportTypesRQ
     */
    public function getGetAirportTypesRQ_1()
    {
      return $this->GetAirportTypesRQ_1;
    }

    /**
     * @param GetAirportTypesRQ $GetAirportTypesRQ_1
     * @return \App\models\hotelAPI\Commons\getAirportTypes
     */
    public function setGetAirportTypesRQ_1($GetAirportTypesRQ_1)
    {
      $this->GetAirportTypesRQ_1 = $GetAirportTypesRQ_1;
      return $this;
    }

}
