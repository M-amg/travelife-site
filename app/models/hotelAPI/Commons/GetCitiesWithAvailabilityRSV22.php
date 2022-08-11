<?php

namespace App\models\hotelAPI\Commons;

class GetCitiesWithAvailabilityRSV22 extends GetCitiesWithAvailabilityRS
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
     * @return \App\models\hotelAPI\Commons\GetCitiesWithAvailabilityRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
