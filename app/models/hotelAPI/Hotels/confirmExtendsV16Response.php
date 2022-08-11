<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV16Response
{

    /**
     * @var ConfirmExtendsRSV17 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRSV17
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRSV17 $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV16Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
