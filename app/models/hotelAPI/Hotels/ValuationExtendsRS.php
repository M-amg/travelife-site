<?php

namespace App\models\hotelAPI\Hotels;

class ValuationExtendsRS extends ValuationRS
{

    /**
     * @var OffersDescription[] $offerDescription
     */
    protected $offerDescription = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \App\models\hotelAPI\Hotels\ValuationExtendsRS
     */
    public function setOfferDescription(array $offerDescription = null)
    {
      $this->offerDescription = $offerDescription;
      return $this;
    }

}
