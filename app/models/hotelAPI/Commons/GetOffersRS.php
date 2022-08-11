<?php

namespace App\models\hotelAPI\Commons;

class GetOffersRS
{

    /**
     * @var Offer[] $offers
     */
    protected $offers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Offer[]
     */
    public function getOffers()
    {
      return $this->offers;
    }

    /**
     * @param Offer[] $offers
     * @return \App\models\hotelAPI\Commons\GetOffersRS
     */
    public function setOffers(array $offers = null)
    {
      $this->offers = $offers;
      return $this;
    }

}
