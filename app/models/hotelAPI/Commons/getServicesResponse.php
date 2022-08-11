<?php

namespace App\models\hotelAPI\Commons;

class getServicesResponse
{

    /**
     * @var GetServicesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetServicesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetServicesRS $result
     * @return \App\models\hotelAPI\Commons\getServicesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
