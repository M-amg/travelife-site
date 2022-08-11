<?php

namespace App\models\hotelAPI\Commons;

class GetDistrictsRS
{

    /**
     * @var District[] $district
     */
    protected $district = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return District[]
     */
    public function getDistrict()
    {
      return $this->district;
    }

    /**
     * @param District[] $district
     * @return \App\models\hotelAPI\Commons\GetDistrictsRS
     */
    public function setDistrict(array $district = null)
    {
      $this->district = $district;
      return $this;
    }

}
