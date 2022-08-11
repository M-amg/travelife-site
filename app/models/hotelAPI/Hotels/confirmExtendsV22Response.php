<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV22Response
{

    /**
     * @var ConfirmExtendsRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRSV22 $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
