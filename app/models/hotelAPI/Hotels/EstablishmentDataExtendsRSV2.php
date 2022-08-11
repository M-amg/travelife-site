<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataExtendsRSV2 extends EstablishmentDataExtendsRS
{

    /**
     * @var EstablishmentType[] $establishmentTypes
     */
    protected $establishmentTypes = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRSV2
     */
    public function setEstablishmentTypes(array $establishmentTypes = null)
    {
      $this->establishmentTypes = $establishmentTypes;
      return $this;
    }

}
