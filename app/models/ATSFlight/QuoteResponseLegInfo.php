<?php

namespace App\models\ATSFlight;

class QuoteResponseLegInfo
{

    /**
     * @var string $LegBookingClass
     */
    protected $LegBookingClass = null;

    /**
     * @var string $LegCarrier
     */
    protected $LegCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLegBookingClass()
    {
      return $this->LegBookingClass;
    }

    /**
     * @param string $LegBookingClass
     * @return \App\models\ATSFlight\QuoteResponseLegInfo
     */
    public function setLegBookingClass($LegBookingClass)
    {
      $this->LegBookingClass = $LegBookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegCarrier()
    {
      return $this->LegCarrier;
    }

    /**
     * @param string $LegCarrier
     * @return \App\models\ATSFlight\QuoteResponseLegInfo
     */
    public function setLegCarrier($LegCarrier)
    {
      $this->LegCarrier = $LegCarrier;
      return $this;
    }

}
