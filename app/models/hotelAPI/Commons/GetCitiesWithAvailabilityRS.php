<?php

namespace App\models\hotelAPI\Commons;

class GetCitiesWithAvailabilityRS
{

    /**
     * @var CityHotelsByAgency[] $list
     */
    protected $list = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CityHotelsByAgency[]
     */
    public function getList()
    {
      return $this->list;
    }

    /**
     * @param CityHotelsByAgency[] $list
     * @return \App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRS
     */
    public function setList(array $list = null)
    {
      $this->list = $list;
      return $this;
    }

}
