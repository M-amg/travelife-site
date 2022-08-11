<?php

namespace App\models\hotelAPI\Basket;

class confirmExtendsV3
{

    /**
     * @var ConfirmRQExtendsV2 $ConfirmRQExtendsV2_1
     */
    protected $ConfirmRQExtendsV2_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQExtendsV2
     */
    public function getConfirmRQExtendsV2_1()
    {
      return $this->ConfirmRQExtendsV2_1;
    }

    /**
     * @param ConfirmRQExtendsV2 $ConfirmRQExtendsV2_1
     * @return \App\models\hotelAPI\Basket\confirmExtendsV3
     */
    public function setConfirmRQExtendsV2_1($ConfirmRQExtendsV2_1)
    {
      $this->ConfirmRQExtendsV2_1 = $ConfirmRQExtendsV2_1;
      return $this;
    }

}
