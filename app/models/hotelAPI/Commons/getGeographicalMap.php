<?php

namespace App\models\hotelAPI\Commons;

class getGeographicalMap
{

    /**
     * @var GetGeographicalMapRQ $GetGeographicalMapRQ_1
     */
    protected $GetGeographicalMapRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetGeographicalMapRQ
     */
    public function getGetGeographicalMapRQ_1()
    {
      return $this->GetGeographicalMapRQ_1;
    }

    /**
     * @param GetGeographicalMapRQ $GetGeographicalMapRQ_1
     * @return \App\models\hotelAPI\Commons\getGeographicalMap
     */
    public function setGetGeographicalMapRQ_1($GetGeographicalMapRQ_1)
    {
      $this->GetGeographicalMapRQ_1 = $GetGeographicalMapRQ_1;
      return $this;
    }

}
