<?php

namespace App\models\hotelAPI\Commons;

class getCountriesResponse
{

    /**
     * @var GetCountriesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCountriesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCountriesRS $result
     * @return \App\models\hotelAPI\Commons\getCountriesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
