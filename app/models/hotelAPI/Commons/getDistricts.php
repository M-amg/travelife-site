<?php

namespace App\models\hotelAPI\Commons;

class getDistricts
{

    /**
     * @var GetDistrictsRQ $GetDistrictsRQ_1
     */
    protected $GetDistrictsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetDistrictsRQ
     */
    public function getGetDistrictsRQ_1()
    {
      return $this->GetDistrictsRQ_1;
    }

    /**
     * @param GetDistrictsRQ $GetDistrictsRQ_1
     * @return \App\models\hotelAPI\Commons\getDistricts
     */
    public function setGetDistrictsRQ_1($GetDistrictsRQ_1)
    {
      $this->GetDistrictsRQ_1 = $GetDistrictsRQ_1;
      return $this;
    }

}
