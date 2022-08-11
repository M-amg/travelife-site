<?php

namespace App\models\hotelAPI\Commons;

class getCountriesV22Response
{

    /**
     * @var GetCountriesRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCountriesRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCountriesRSV22 $result
     * @return \App\models\hotelAPI\Commons\getCountriesV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
