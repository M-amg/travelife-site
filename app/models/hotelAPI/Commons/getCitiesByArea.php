<?php

namespace App\models\hotelAPI\Commons;

class getCitiesByArea
{

    /**
     * @var GetCitiesByAreaRQ $GetCitiesByAreaRQ_1
     */
    protected $GetCitiesByAreaRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesByAreaRQ
     */
    public function getGetCitiesByAreaRQ_1()
    {
      return $this->GetCitiesByAreaRQ_1;
    }

    /**
     * @param GetCitiesByAreaRQ $GetCitiesByAreaRQ_1
     * @return \App\models\hotelAPI\Commons\getCitiesByArea
     */
    public function setGetCitiesByAreaRQ_1($GetCitiesByAreaRQ_1)
    {
      $this->GetCitiesByAreaRQ_1 = $GetCitiesByAreaRQ_1;
      return $this;
    }

}
