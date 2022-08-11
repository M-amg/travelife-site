<?php

namespace App\models\hotelAPI\Hotels;

class AvailabilityMultiRSV22 extends AvailabilityMultiRSV20
{

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @param int $fromRow
     * @param int $numRows
     * @param int $totalRows
     */
    public function __construct($fromRow, $numRows, $totalRows)
    {
      parent::__construct($fromRow, $numRows, $totalRows);
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
