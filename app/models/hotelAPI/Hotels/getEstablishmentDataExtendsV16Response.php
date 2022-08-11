<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataExtendsV16Response
{

    /**
     * @var EstablishmentDataExtendsRSV16 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataExtendsRSV16
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentDataExtendsRSV16 $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataExtendsV16Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
