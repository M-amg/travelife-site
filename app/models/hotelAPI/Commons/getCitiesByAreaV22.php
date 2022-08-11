<?php

namespace App\models\hotelAPI\Commons;

class getCitiesByAreaV22
{

    /**
     * @var GetCitiesByAreaRQV22 $GetCitiesByAreaRQV22_1
     */
    protected $GetCitiesByAreaRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesByAreaRQV22
     */
    public function getGetCitiesByAreaRQV22_1()
    {
      return $this->GetCitiesByAreaRQV22_1;
    }

    /**
     * @param GetCitiesByAreaRQV22 $GetCitiesByAreaRQV22_1
     * @return \App\models\hotelAPI\Commons\getCitiesByAreaV22
     */
    public function setGetCitiesByAreaRQV22_1($GetCitiesByAreaRQV22_1)
    {
      $this->GetCitiesByAreaRQV22_1 = $GetCitiesByAreaRQV22_1;
      return $this;
    }

}
