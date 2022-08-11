<?php

namespace App\models\hotelAPI\Commons;

class getCitiesWithAvailability
{

    /**
     * @var GetCitiesWithAvailabilityRQ $GetCitiesWithAvailabilityRQ_1
     */
    protected $GetCitiesWithAvailabilityRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesWithAvailabilityRQ
     */
    public function getGetCitiesWithAvailabilityRQ_1()
    {
      return $this->GetCitiesWithAvailabilityRQ_1;
    }

    /**
     * @param GetCitiesWithAvailabilityRQ $GetCitiesWithAvailabilityRQ_1
     * @return \App\models\hotelAPI\Commons\getCitiesWithAvailability
     */
    public function setGetCitiesWithAvailabilityRQ_1($GetCitiesWithAvailabilityRQ_1)
    {
      $this->GetCitiesWithAvailabilityRQ_1 = $GetCitiesWithAvailabilityRQ_1;
      return $this;
    }

}
