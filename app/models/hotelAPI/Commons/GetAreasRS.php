<?php

namespace App\models\hotelAPI\Commons;

class GetAreasRS
{

    /**
     * @var Area[] $areas
     */
    protected $areas = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Area[]
     */
    public function getAreas()
    {
      return $this->areas;
    }

    /**
     * @param Area[] $areas
     * @return \App\models\hotelAPI\Commons\GetAreasRS
     */
    public function setAreas(array $areas = null)
    {
      $this->areas = $areas;
      return $this;
    }

}
