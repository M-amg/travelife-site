<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV22
{

    /**
     * @var ConfirmRQV22 $ConfirmRQV22_1
     */
    protected $ConfirmRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQV22
     */
    public function getConfirmRQV22_1()
    {
      return $this->ConfirmRQV22_1;
    }

    /**
     * @param ConfirmRQV22 $ConfirmRQV22_1
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV22
     */
    public function setConfirmRQV22_1($ConfirmRQV22_1)
    {
      $this->ConfirmRQV22_1 = $ConfirmRQV22_1;
      return $this;
    }

}
