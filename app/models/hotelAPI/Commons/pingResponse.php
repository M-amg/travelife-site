<?php

namespace App\models\hotelAPI\Commons;

class pingResponse
{

    /**
     * @var PingRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PingRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param PingRS $result
     * @return \App\models\hotelAPI\Commons\pingResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
