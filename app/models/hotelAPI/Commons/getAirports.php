<?php

namespace App\models\hotelAPI\Commons;

class getAirports
{

    /**
     * @var GetAirportsRQ $GetAirportsRQ_1
     */
    protected $GetAirportsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAirportsRQ
     */
    public function getGetAirportsRQ_1()
    {
      return $this->GetAirportsRQ_1;
    }

    /**
     * @param GetAirportsRQ $GetAirportsRQ_1
     * @return \App\models\hotelAPI\Commons\getAirports
     */
    public function setGetAirportsRQ_1($GetAirportsRQ_1)
    {
      $this->GetAirportsRQ_1 = $GetAirportsRQ_1;
      return $this;
    }

}
