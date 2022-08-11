<?php

namespace App\models\hotelAPI\Basket;

class confirmBasketV22
{

    /**
     * @var ConfirmRQExtendsV22 $ConfirmRQExtendsV22_1
     */
    protected $ConfirmRQExtendsV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQExtendsV22
     */
    public function getConfirmRQExtendsV22_1()
    {
      return $this->ConfirmRQExtendsV22_1;
    }

    /**
     * @param ConfirmRQExtendsV22 $ConfirmRQExtendsV22_1
     * @return \App\models\hotelAPI\Basket\confirmBasketV22
     */
    public function setConfirmRQExtendsV22_1($ConfirmRQExtendsV22_1)
    {
      $this->ConfirmRQExtendsV22_1 = $ConfirmRQExtendsV22_1;
      return $this;
    }

}
