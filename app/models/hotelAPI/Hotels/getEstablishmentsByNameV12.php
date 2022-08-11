<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentsByNameV12
{

    /**
     * @var GetEstablishmentsByNameRQ $GetEstablishmentsByNameRQ_1
     */
    protected $GetEstablishmentsByNameRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentsByNameRQ
     */
    public function getGetEstablishmentsByNameRQ_1()
    {
      return $this->GetEstablishmentsByNameRQ_1;
    }

    /**
     * @param GetEstablishmentsByNameRQ $GetEstablishmentsByNameRQ_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentsByNameV12
     */
    public function setGetEstablishmentsByNameRQ_1($GetEstablishmentsByNameRQ_1)
    {
      $this->GetEstablishmentsByNameRQ_1 = $GetEstablishmentsByNameRQ_1;
      return $this;
    }

}
