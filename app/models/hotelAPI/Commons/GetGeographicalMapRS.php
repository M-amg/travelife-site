<?php

namespace App\models\hotelAPI\Commons;

class GetGeographicalMapRS
{

    /**
     * @var Continent[] $continents
     */
    protected $continents = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Continent[]
     */
    public function getContinents()
    {
      return $this->continents;
    }

    /**
     * @param Continent[] $continents
     * @return \App\models\hotelAPI\Commons\GetGeographicalMapRS
     */
    public function setContinents(array $continents = null)
    {
      $this->continents = $continents;
      return $this;
    }

}
