<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmExtendsRSV22 extends ConfirmExtendsRSV20
{

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      parent::__construct($positionInBasket);
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
     * @return \App\models\hotelAPI\Hotels\ConfirmExtendsRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

}
