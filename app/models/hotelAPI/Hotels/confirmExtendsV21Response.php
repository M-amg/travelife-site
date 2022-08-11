<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV21Response
{

    /**
     * @var ConfirmExtendsRSV20 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRSV20
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRSV20 $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV21Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
