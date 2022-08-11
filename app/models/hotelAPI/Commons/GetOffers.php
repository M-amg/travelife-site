<?php

namespace App\models\hotelAPI\Commons;

class GetOffers
{

    /**
     * @var GetOffersRQ $GetOffersRQ_1
     */
    protected $GetOffersRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetOffersRQ
     */
    public function getGetOffersRQ_1()
    {
      return $this->GetOffersRQ_1;
    }

    /**
     * @param GetOffersRQ $GetOffersRQ_1
     * @return \App\models\hotelAPI\Commons\GetOffers
     */
    public function setGetOffersRQ_1($GetOffersRQ_1)
    {
      $this->GetOffersRQ_1 = $GetOffersRQ_1;
      return $this;
    }

}
