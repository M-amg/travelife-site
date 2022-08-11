<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentsByNameResponse
{

    /**
     * @var GetEstablishmentsByNameRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentsByNameRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentsByNameRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentsByNameResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
