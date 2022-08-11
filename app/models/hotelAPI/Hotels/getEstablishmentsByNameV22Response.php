<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentsByNameV22Response
{

    /**
     * @var GetEstablishmentsByNameRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentsByNameRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentsByNameRSV22 $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentsByNameV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
