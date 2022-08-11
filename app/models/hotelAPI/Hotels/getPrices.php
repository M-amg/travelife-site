<?php

namespace App\models\hotelAPI\Hotels;

class getPrices
{

    /**
     * @var GetPricesRQ $GetPricesRQ_1
     */
    protected $GetPricesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPricesRQ
     */
    public function getGetPricesRQ_1()
    {
      return $this->GetPricesRQ_1;
    }

    /**
     * @param GetPricesRQ $GetPricesRQ_1
     * @return \App\models\hotelAPI\Hotels\getPrices
     */
    public function setGetPricesRQ_1($GetPricesRQ_1)
    {
      $this->GetPricesRQ_1 = $GetPricesRQ_1;
      return $this;
    }

}
