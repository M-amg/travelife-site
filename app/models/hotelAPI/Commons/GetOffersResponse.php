<?php

namespace App\models\hotelAPI\Commons;

class GetOffersResponse
{

    /**
     * @var GetOffersRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetOffersRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetOffersRS $result
     * @return \App\models\hotelAPI\Commons\GetOffersResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
