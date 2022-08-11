<?php

namespace App\models\hotelAPI\Commons;

class getServices
{

    /**
     * @var GetServicesRQ $GetServicesRQ_1
     */
    protected $GetServicesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetServicesRQ
     */
    public function getGetServicesRQ_1()
    {
      return $this->GetServicesRQ_1;
    }

    /**
     * @param GetServicesRQ $GetServicesRQ_1
     * @return \App\models\hotelAPI\Commons\getServices
     */
    public function setGetServicesRQ_1($GetServicesRQ_1)
    {
      $this->GetServicesRQ_1 = $GetServicesRQ_1;
      return $this;
    }

}
