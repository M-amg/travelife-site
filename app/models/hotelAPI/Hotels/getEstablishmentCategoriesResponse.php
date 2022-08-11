<?php

namespace App\models\hotelAPI\Hotels;

class getEstablishmentCategoriesResponse
{

    /**
     * @var GetEstablishmentCategoriesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetEstablishmentCategoriesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetEstablishmentCategoriesRS $result
     * @return \App\models\hotelAPI\Hotels\getEstablishmentCategoriesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
