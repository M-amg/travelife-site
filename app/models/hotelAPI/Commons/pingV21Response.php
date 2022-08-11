<?php

namespace App\models\hotelAPI\Commons;

class pingV21Response
{

    /**
     * @var PingRSV21 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PingRSV21
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param PingRSV21 $result
     * @return \App\models\hotelAPI\Commons\pingV21Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
