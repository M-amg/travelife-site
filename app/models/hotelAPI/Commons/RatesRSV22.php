<?php

namespace App\models\hotelAPI\Commons;

class RatesRSV22
{

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @var RateRS[] $rates
     */
    protected $rates = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\hotelAPI\Commons\RatesRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

    /**
     * @return RateRS[]
     */
    public function getRates()
    {
      return $this->rates;
    }

    /**
     * @param RateRS[] $rates
     * @return \App\models\hotelAPI\Commons\RatesRSV22
     */
    public function setRates(array $rates = null)
    {
      $this->rates = $rates;
      return $this;
    }

}
