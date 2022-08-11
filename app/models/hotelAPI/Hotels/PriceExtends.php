<?php

namespace App\models\hotelAPI\Hotels;

class PriceExtends extends Price
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
     * @return \App\models\hotelAPI\Hotels\PriceExtends
     */
    public function setOfferDescription(array $offerDescription = null)
    {
      $this->offerDescription = $offerDescription;
      return $this;
    }

}
