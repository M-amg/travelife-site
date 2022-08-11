<?php

namespace App\models\hotelAPI\Commons;

class getCitiesWithAvailabilityV22Response
{

    /**
     * @var GetCitiesWithAvailabilityRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesWithAvailabilityRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCitiesWithAvailabilityRSV22 $result
     * @return \App\models\hotelAPI\Commons\getCitiesWithAvailabilityV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
