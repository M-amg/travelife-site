<?php

namespace App\models\ATSFlight;

class QuoteResponseSurcharge
{

    /**
     * @var QuoteSurchargeEnum $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteSurchargeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param QuoteSurchargeEnum $Type
     * @return \App\models\ATSFlight\QuoteResponseSurcharge
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \App\models\ATSFlight\QuoteResponseSurcharge
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
