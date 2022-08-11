<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentCategories
{

    /**
     * @var GetEstablishmentCategoriesRQ $GetEstablishmentCategoriesRQ_1
     */
    protected $GetEstablishmentCategoriesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentCategoriesRQ
     */
    public function getGetEstablishmentCategoriesRQ_1()
    {
      return $this->GetEstablishmentCategoriesRQ_1;
    }

    /**
     * @param GetEstablishmentCategoriesRQ $GetEstablishmentCategoriesRQ_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentCategories
     */
    public function setGetEstablishmentCategoriesRQ_1($GetEstablishmentCategoriesRQ_1)
    {
      $this->GetEstablishmentCategoriesRQ_1 = $GetEstablishmentCategoriesRQ_1;
      return $this;
    }

}
