<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataExtendsResponse
{

    /**
     * @var EstablishmentDataExtendsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataExtendsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentDataExtendsRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataExtendsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
