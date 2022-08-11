<?php

namespace App\models\hotelAPI\Commons;

class GetAreasRSV12
{

    /**
     * @var AreaV12[] $areas
     */
    protected $areas = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AreaV12[]
     */
    public function getAreas()
    {
      return $this->areas;
    }

    /**
     * @param AreaV12[] $areas
     * @return \App\models\hotelAPI\Commons\GetAreasRSV12
     */
    public function setAreas(array $areas = null)
    {
      $this->areas = $areas;
      return $this;
    }

}
