<?php

namespace App\models\hotelAPI\Commons;

class getCitiesV22
{

    /**
     * @var GetCitiesRQV22 $GetCitiesRQV22_1
     */
    protected $GetCitiesRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesRQV22
     */
    public function getGetCitiesRQV22_1()
    {
      return $this->GetCitiesRQV22_1;
    }

    /**
     * @param GetCitiesRQV22 $GetCitiesRQV22_1
     * @return \App\models\hotelAPI\Commons\getCitiesV22
     */
    public function setGetCitiesRQV22_1($GetCitiesRQV22_1)
    {
      $this->GetCitiesRQV22_1 = $GetCitiesRQV22_1;
      return $this;
    }

}
