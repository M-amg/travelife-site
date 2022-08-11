<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentsByNameV12Response
{

    /**
     * @var GetEstablishmentsByNameRSV12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentsByNameRSV12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentsByNameRSV12 $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentsByNameV12Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
