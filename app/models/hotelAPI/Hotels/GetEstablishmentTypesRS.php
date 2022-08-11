<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentTypesRS
{

    /**
     * @var EstablishmentType[] $establishmentTypes
     */
    protected $establishmentTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentType[]
     */
    public function getEstablishmentTypes()
    {
      return $this->establishmentTypes;
    }

    /**
     * @param EstablishmentType[] $establishmentTypes
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentTypesRS
     */
    public function setEstablishmentTypes(array $establishmentTypes = null)
    {
      $this->establishmentTypes = $establishmentTypes;
      return $this;
    }

}
