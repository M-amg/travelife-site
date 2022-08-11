<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentData
{

    /**
     * @var EstablishmentDataRQ $EstablishmentDataRQ_1
     */
    protected $EstablishmentDataRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataRQ
     */
    public function getEstablishmentDataRQ_1()
    {
      return $this->EstablishmentDataRQ_1;
    }

    /**
     * @param EstablishmentDataRQ $EstablishmentDataRQ_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentData
     */
    public function setEstablishmentDataRQ_1($EstablishmentDataRQ_1)
    {
      $this->EstablishmentDataRQ_1 = $EstablishmentDataRQ_1;
      return $this;
    }

}
