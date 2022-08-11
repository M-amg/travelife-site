<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentPlatform
{

    /**
     * @var EstablishmentDataRQV2 $EstablishmentDataRQV2_1
     */
    protected $EstablishmentDataRQV2_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentDataRQV2
     */
    public function getEstablishmentDataRQV2_1()
    {
      return $this->EstablishmentDataRQV2_1;
    }

    /**
     * @param EstablishmentDataRQV2 $EstablishmentDataRQV2_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentPlatform
     */
    public function setEstablishmentDataRQV2_1($EstablishmentDataRQV2_1)
    {
      $this->EstablishmentDataRQV2_1 = $EstablishmentDataRQV2_1;
      return $this;
    }

}
