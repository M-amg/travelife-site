<?php

namespace App\models\hotelAPI\Commons;

class GetEventsByArea
{

    /**
     * @var GetEventsByAreaRQ $GetEventsByAreaRQ_1
     */
    protected $GetEventsByAreaRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEventsByAreaRQ
     */
    public function getGetEventsByAreaRQ_1()
    {
      return $this->GetEventsByAreaRQ_1;
    }

    /**
     * @param GetEventsByAreaRQ $GetEventsByAreaRQ_1
     * @return \App\models\hotelAPI\Commons\GetEventsByArea
     */
    public function setGetEventsByAreaRQ_1($GetEventsByAreaRQ_1)
    {
      $this->GetEventsByAreaRQ_1 = $GetEventsByAreaRQ_1;
      return $this;
    }

}
