<?php

namespace App\models\hotelAPI\Commons;

class getCities
{

    /**
     * @var GetCitiesRQ $GetCitiesRQ_1
     */
    protected $GetCitiesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesRQ
     */
    public function getGetCitiesRQ_1()
    {
      return $this->GetCitiesRQ_1;
    }

    /**
     * @param GetCitiesRQ $GetCitiesRQ_1
     * @return \App\models\hotelAPI\Commons\getCities
     */
    public function setGetCitiesRQ_1($GetCitiesRQ_1)
    {
      $this->GetCitiesRQ_1 = $GetCitiesRQ_1;
      return $this;
    }

}
