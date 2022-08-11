<?php

namespace App\models\hotelAPI\Commons;

class getRatesV22Response
{

    /**
     * @var RatesRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RatesRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param RatesRSV22 $result
     * @return \App\models\hotelAPI\Commons\getRatesV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
