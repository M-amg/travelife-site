<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataExtendsV22Response
{

    /**
     * @var EstablishmentDataExtendsRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataExtendsRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentDataExtendsRSV22 $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataExtendsV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
