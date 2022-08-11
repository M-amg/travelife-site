<?php

namespace App\models\hotelAPI\Commons;

class getAreas
{

    /**
     * @var GetAreasRQ $GetAreasRQ_1
     */
    protected $GetAreasRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAreasRQ
     */
    public function getGetAreasRQ_1()
    {
      return $this->GetAreasRQ_1;
    }

    /**
     * @param GetAreasRQ $GetAreasRQ_1
     * @return \App\models\hotelAPI\Commons\getAreas
     */
    public function setGetAreasRQ_1($GetAreasRQ_1)
    {
      $this->GetAreasRQ_1 = $GetAreasRQ_1;
      return $this;
    }

}
