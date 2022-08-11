<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentCategoryGroup
{

    /**
     * @var GetEstablishmentCategoryGroupsRQ $GetEstablishmentCategoryGroupsRQ_1
     */
    protected $GetEstablishmentCategoryGroupsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentCategoryGroupsRQ
     */
    public function getGetEstablishmentCategoryGroupsRQ_1()
    {
      return $this->GetEstablishmentCategoryGroupsRQ_1;
    }

    /**
     * @param GetEstablishmentCategoryGroupsRQ $GetEstablishmentCategoryGroupsRQ_1
     * @return \App\models\hotelAPI\Hotels\getEstablishmentCategoryGroup
     */
    public function setGetEstablishmentCategoryGroupsRQ_1($GetEstablishmentCategoryGroupsRQ_1)
    {
      $this->GetEstablishmentCategoryGroupsRQ_1 = $GetEstablishmentCategoryGroupsRQ_1;
      return $this;
    }

}
