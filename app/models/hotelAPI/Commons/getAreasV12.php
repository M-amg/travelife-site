<?php

namespace App\models\hotelAPI\Commons;

class getAreasV12
{

    /**
     * @var GetAreasRQV12 $GetAreasRQV12_1
     */
    protected $GetAreasRQV12_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAreasRQV12
     */
    public function getGetAreasRQV12_1()
    {
      return $this->GetAreasRQV12_1;
    }

    /**
     * @param GetAreasRQV12 $GetAreasRQV12_1
     * @return \App\models\hotelAPI\Commons\getAreasV12
     */
    public function setGetAreasRQV12_1($GetAreasRQV12_1)
    {
      $this->GetAreasRQV12_1 = $GetAreasRQV12_1;
      return $this;
    }

}
