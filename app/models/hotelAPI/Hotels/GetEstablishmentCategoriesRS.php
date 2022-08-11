<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentCategoriesRS
{

    /**
     * @var EstablishmentCategory[] $establishmentCategories
     */
    protected $establishmentCategories = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentCategory[]
     */
    public function getEstablishmentCategories()
    {
      return $this->establishmentCategories;
    }

    /**
     * @param EstablishmentCategory[] $establishmentCategories
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentCategoriesRS
     */
    public function setEstablishmentCategories(array $establishmentCategories = null)
    {
      $this->establishmentCategories = $establishmentCategories;
      return $this;
    }

}
