<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentCategoryGroupsRS
{

    /**
     * @var EstablishmentCategoryGroup[] $establishmentCategories
     */
    protected $establishmentCategories = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstablishmentCategoryGroup[]
     */
    public function getEstablishmentCategories()
    {
      return $this->establishmentCategories;
    }

    /**
     * @param EstablishmentCategoryGroup[] $establishmentCategories
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentCategoryGroupsRS
     */
    public function setEstablishmentCategories(array $establishmentCategories = null)
    {
      $this->establishmentCategories = $establishmentCategories;
      return $this;
    }

}
