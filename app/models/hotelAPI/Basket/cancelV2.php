<?php

namespace App\models\hotelAPI\Basket;

class cancelV2
{

    /**
     * @var CancelRQ $CancelRQ_1
     */
    protected $CancelRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRQ
     */
    public function getCancelRQ_1()
    {
      return $this->CancelRQ_1;
    }

    /**
     * @param CancelRQ $CancelRQ_1
     * @return \App\models\hotelAPI\Basket\cancelV2
     */
    public function setCancelRQ_1($CancelRQ_1)
    {
      $this->CancelRQ_1 = $CancelRQ_1;
      return $this;
    }

}
