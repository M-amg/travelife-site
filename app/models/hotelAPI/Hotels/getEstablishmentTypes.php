<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentTypes
{

    /**
     * @var GetEstablishmentTypesRQ $GetEstablishmentTypesRQ_1
     */
    protected $GetEstablishmentTypesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentTypesRQ
     */
    public function getGetEstablishmentTypesRQ_1()
    {
      return $this->GetEstablishmentTypesRQ_1;
    }

    /**
     * @param GetEstablishmentTypesRQ $GetEstablishmentTypesRQ_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentTypes
     */
    public function setGetEstablishmentTypesRQ_1($GetEstablishmentTypesRQ_1)
    {
      $this->GetEstablishmentTypesRQ_1 = $GetEstablishmentTypesRQ_1;
      return $this;
    }

}
