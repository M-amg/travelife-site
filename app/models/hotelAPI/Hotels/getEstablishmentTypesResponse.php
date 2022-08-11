<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentTypesResponse
{

    /**
     * @var GetEstablishmentTypesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentTypesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentTypesRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
