<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV12Response
{

    /**
     * @var ConfirmExtendsV12RS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsV12RS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsV12RS $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV12Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
