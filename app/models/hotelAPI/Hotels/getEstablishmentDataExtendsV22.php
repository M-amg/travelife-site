<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentDataExtendsV22
{

    /**
     * @var EstablishmentDataRQV22 $EstablishmentDataRQV22_1
     */
    protected $EstablishmentDataRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataRQV22
     */
    public function getEstablishmentDataRQV22_1()
    {
      return $this->EstablishmentDataRQV22_1;
    }

    /**
     * @param EstablishmentDataRQV22 $EstablishmentDataRQV22_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentDataExtendsV22
     */
    public function setEstablishmentDataRQV22_1($EstablishmentDataRQV22_1)
    {
      $this->EstablishmentDataRQV22_1 = $EstablishmentDataRQV22_1;
      return $this;
    }

}
