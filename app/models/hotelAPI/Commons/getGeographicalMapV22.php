<?php

namespace App\models\hotelAPI\Commons;

class getGeographicalMapV22
{

    /**
     * @var GetGeographicalMapRQV22 $GetGeographicalMapRQV22_1
     */
    protected $GetGeographicalMapRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetGeographicalMapRQV22
     */
    public function getGetGeographicalMapRQV22_1()
    {
      return $this->GetGeographicalMapRQV22_1;
    }

    /**
     * @param GetGeographicalMapRQV22 $GetGeographicalMapRQV22_1
     * @return \App\models\hotelAPI\Commons\getGeographicalMapV22
     */
    public function setGetGeographicalMapRQV22_1($GetGeographicalMapRQV22_1)
    {
      $this->GetGeographicalMapRQV22_1 = $GetGeographicalMapRQV22_1;
      return $this;
    }

}
