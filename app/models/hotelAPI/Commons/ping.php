<?php

namespace App\models\hotelAPI\Commons;

class ping
{

    /**
     * @var PingRQ $PingRQ_1
     */
    protected $PingRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PingRQ
     */
    public function getPingRQ_1()
    {
      return $this->PingRQ_1;
    }

    /**
     * @param PingRQ $PingRQ_1
     * @return \App\models\hotelAPI\Commons\ping
     */
    public function setPingRQ_1($PingRQ_1)
    {
      $this->PingRQ_1 = $PingRQ_1;
      return $this;
    }

}
