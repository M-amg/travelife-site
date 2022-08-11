<?php

namespace App\models\ATSFlight;

class PaymentFilter
{

    /**
     * @var FareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var ArrayOfPaymentFilterDetails $FilterDetails
     */
    protected $FilterDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param FareTypeEnum $FareType
     * @return \App\models\ATSFlight\PaymentFilter
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return ArrayOfPaymentFilterDetails
     */
    public function getFilterDetails()
    {
      return $this->FilterDetails;
    }

    /**
     * @param ArrayOfPaymentFilterDetails $FilterDetails
     * @return \App\models\ATSFlight\PaymentFilter
     */
    public function setFilterDetails($FilterDetails)
    {
      $this->FilterDetails = $FilterDetails;
      return $this;
    }

}
