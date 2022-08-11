<?php

namespace App\models\hotelAPI\Commons;

class GetEventsByCity
{

    /**
     * @var GetEventsByCityRQ $GetEventsByCityRQ_1
     */
    protected $GetEventsByCityRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEventsByCityRQ
     */
    public function getGetEventsByCityRQ_1()
    {
      return $this->GetEventsByCityRQ_1;
    }

    /**
     * @param GetEventsByCityRQ $GetEventsByCityRQ_1
     * @return \App\models\hotelAPI\Commons\GetEventsByCity
     */
    public function setGetEventsByCityRQ_1($GetEventsByCityRQ_1)
    {
      $this->GetEventsByCityRQ_1 = $GetEventsByCityRQ_1;
      return $this;
    }

}
