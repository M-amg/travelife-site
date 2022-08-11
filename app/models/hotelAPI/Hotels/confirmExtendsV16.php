<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV16
{

    /**
     * @var ConfirmRQV15 $ConfirmRQV15_1
     */
    protected $ConfirmRQV15_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQV15
     */
    public function getConfirmRQV15_1()
    {
      return $this->ConfirmRQV15_1;
    }

    /**
     * @param ConfirmRQV15 $ConfirmRQV15_1
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV16
     */
    public function setConfirmRQV15_1($ConfirmRQV15_1)
    {
      $this->ConfirmRQV15_1 = $ConfirmRQV15_1;
      return $this;
    }

}
