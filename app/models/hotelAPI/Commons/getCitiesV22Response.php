<?php

namespace App\models\hotelAPI\Commons;

class getCitiesV22Response
{

    /**
     * @var GetCitiesRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetCitiesRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetCitiesRSV22 $result
     * @return \App\models\hotelAPI\Commons\getCitiesV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
