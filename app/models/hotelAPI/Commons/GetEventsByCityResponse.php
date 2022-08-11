<?php

namespace App\models\hotelAPI\Commons;

class GetEventsByCityResponse
{

    /**
     * @var GetEventsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEventsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEventsRS $result
     * @return \App\models\hotelAPI\Commons\GetEventsByCityResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
