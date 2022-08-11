<?php

namespace App\models\hotelAPI\Basket;

class GetBasketsRSV22 extends GetBasketsRS
{

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @param int $fromRow
     * @param int $toRow
     * @param int $totalRows
     */
    public function __construct($fromRow, $toRow, $totalRows)
    {
      parent::__construct($fromRow, $toRow, $totalRows);
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
