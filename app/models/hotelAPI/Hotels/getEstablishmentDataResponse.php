<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataResponse
{

    /**
     * @var EstablishmentDataRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentDataRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
