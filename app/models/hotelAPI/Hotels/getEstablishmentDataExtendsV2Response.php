<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataExtendsV2Response
{

    /**
     * @var EstablishmentDataExtendsRSV2 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataExtendsRSV2
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentDataExtendsRSV2 $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataExtendsV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
