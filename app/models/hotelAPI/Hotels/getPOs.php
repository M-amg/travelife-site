<?php

namespace App\models\hotelAPI\Hotels;

class getPOs
{

    /**
     * @var GetPOsRQ $GetPOsRQ_1
     */
    protected $GetPOsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPOsRQ
     */
    public function getGetPOsRQ_1()
    {
      return $this->GetPOsRQ_1;
    }

    /**
     * @param GetPOsRQ $GetPOsRQ_1
     * @return \App\models\hotelAPI\Hotels\getPOs
     */
    public function setGetPOsRQ_1($GetPOsRQ_1)
    {
      $this->GetPOsRQ_1 = $GetPOsRQ_1;
      return $this;
    }

}
