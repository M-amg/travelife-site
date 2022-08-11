<?php

namespace App\models\hotelAPI\Hotels;

class ValuationExtendsRSV22 extends ValuationExtendsRSV20
{

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getPricingAgencyCode()
    {
      return $this->pricingAgencyCode;
    }

    /**
     * @param string $pricingAgencyCode
     * @return \App\models\hotelAPI\Hotels\ValuationExtendsRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
