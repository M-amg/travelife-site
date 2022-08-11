<?php

namespace App\models\hotelAPI\Commons;

class getZones
{

    /**
     * @var GetZonesRQ $GetZonesRQ_1
     */
    protected $GetZonesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetZonesRQ
     */
    public function getGetZonesRQ_1()
    {
      return $this->GetZonesRQ_1;
    }

    /**
     * @param GetZonesRQ $GetZonesRQ_1
     * @return \App\models\hotelAPI\Commons\getZones
     */
    public function setGetZonesRQ_1($GetZonesRQ_1)
    {
      $this->GetZonesRQ_1 = $GetZonesRQ_1;
      return $this;
    }

}
