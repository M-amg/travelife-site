<?php

namespace App\models\hotelAPI\Basket;

class ValuateCancellationRSV22 extends ValuateCancellationRSV20
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
     * @return \App\models\hotelAPI\Basket\ValuateCancellationRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
