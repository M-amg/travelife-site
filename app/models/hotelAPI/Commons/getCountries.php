<?php

namespace App\models\hotelAPI\Commons;

class getCountries
{

    /**
     * @var GetCountriesRQ $GetCountriesRQ_1
     */
    protected $GetCountriesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCountriesRQ
     */
    public function getGetCountriesRQ_1()
    {
      return $this->GetCountriesRQ_1;
    }

    /**
     * @param GetCountriesRQ $GetCountriesRQ_1
     * @return \App\models\hotelAPI\Commons\getCountries
     */
    public function setGetCountriesRQ_1($GetCountriesRQ_1)
    {
      $this->GetCountriesRQ_1 = $GetCountriesRQ_1;
      return $this;
    }

}
