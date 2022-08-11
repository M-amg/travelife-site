<?php

namespace App\models\hotelAPI\Basket;

class CancelRSV22 extends CancelRSV20
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
     * @return \App\models\hotelAPI\Basket\CancelRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
