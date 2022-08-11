<?php

namespace App\models\hotelAPI\Commons;

class getCitiesWithAvailabilityResponse
{

    /**
     * @var GetCitiesWithAvailabilityRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesWithAvailabilityRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCitiesWithAvailabilityRS $result
     * @return \App\models\hotelAPI\Commons\getCitiesWithAvailabilityResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
