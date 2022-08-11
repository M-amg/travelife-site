<?php

namespace App\models\hotelAPI\Commons;

class getDistrictsResponse
{

    /**
     * @var GetDistrictsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetDistrictsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetDistrictsRS $result
     * @return \App\models\hotelAPI\Commons\getDistrictsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
