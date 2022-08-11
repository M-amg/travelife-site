<?php

namespace App\models\hotelAPI\Commons;

class GetZonesRS
{

    /**
     * @var Zone[] $zones
     */
    protected $zones = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Zone[]
     */
    public function getZones()
    {
      return $this->zones;
    }

    /**
     * @param Zone[] $zones
     * @return \App\models\hotelAPI\Commons\GetZonesRS
     */
    public function setZones(array $zones = null)
    {
      $this->zones = $zones;
      return $this;
    }

}
