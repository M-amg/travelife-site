<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentCategoryGroupResponse
{

    /**
     * @var GetEstablishmentCategoryGroupsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentCategoryGroupsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentCategoryGroupsRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentCategoryGroupResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
