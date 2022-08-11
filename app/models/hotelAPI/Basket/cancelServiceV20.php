<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceV20
{

    /**
     * @var CancelServiceRQ $CancelServiceRQ_1
     */
    protected $CancelServiceRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRQ
     */
    public function getCancelServiceRQ_1()
    {
      return $this->CancelServiceRQ_1;
    }

    /**
     * @param CancelServiceRQ $CancelServiceRQ_1
     * @return \App\models\hotelAPI\Basket\cancelServiceV20
     */
    public function setCancelServiceRQ_1($CancelServiceRQ_1)
    {
      $this->CancelServiceRQ_1 = $CancelServiceRQ_1;
      return $this;
    }

}
