<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV13
{

    /**
     * @var ConfirmRQ $ConfirmRQ_1
     */
    protected $ConfirmRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQ
     */
    public function getConfirmRQ_1()
    {
      return $this->ConfirmRQ_1;
    }

    /**
     * @param ConfirmRQ $ConfirmRQ_1
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV13
     */
    public function setConfirmRQ_1($ConfirmRQ_1)
    {
      $this->ConfirmRQ_1 = $ConfirmRQ_1;
      return $this;
    }

}
