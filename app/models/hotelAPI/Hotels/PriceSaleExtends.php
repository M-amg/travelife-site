<?php

namespace App\models\hotelAPI\Hotels;

class PriceSaleExtends extends Price
{

    /**
     * @var OffersDescription[] $offerDescription
     */
    protected $offerDescription = null;

    /**
     * @param boolean $offer
     * @param boolean $onRequest
     */
    public function __construct($offer, $onRequest)
    {
      parent::__construct($offer, $onRequest);
    }

    /**
     * @return OffersDescription[]
     */
    public function getOfferDescription()
    {
      return $this->offerDescription;
    }

    /**
     * @param OffersDescription[] $offerDescription
     * @return \App\models\hotelAPI\Hotels\PriceSaleExtends
     */
    public function setOfferDescription(array $offerDescription = null)
    {
      $this->offerDescription = $offerDescription;
      return $this;
    }

}
