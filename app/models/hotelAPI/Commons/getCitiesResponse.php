<?php

namespace App\models\hotelAPI\Commons;

class getCitiesResponse
{

    /**
     * @var GetCitiesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCitiesRS $result
     * @return \App\models\hotelAPI\Commons\getCitiesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
