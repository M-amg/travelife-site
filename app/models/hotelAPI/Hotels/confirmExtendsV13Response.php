<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV13Response
{

    /**
     * @var ConfirmExtendsRSV12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRSV12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRSV12 $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV13Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
