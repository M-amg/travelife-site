<?php

namespace App\models\hotelAPI\Hotels;

class ValuatedOccupationV20 extends ValuatedOccupationV16
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $ratePlanCode
     */
    protected $ratePlanCode = null;

    /**
     * @var Rates $rates
     */
    protected $rates = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $numberOfDays
     * @param int $numberOfRooms
     * @param boolean $onRequest
     */
    public function __construct($adults, $children, $numberOfDays, $numberOfRooms, $onRequest)
    {
      parent::__construct($adults, $children, $numberOfDays, $numberOfRooms, $onRequest);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupationV20
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->ratePlanCode;
    }

    /**
     * @param string $ratePlanCode
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupationV20
     */
    public function setRatePlanCode($ratePlanCode)
    {
      $this->ratePlanCode = $ratePlanCode;
      return $this;
    }

    /**
     * @return Rates
     */
    public function getRates()
    {
      return $this->rates;
    }

    /**
     * @param Rates $rates
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupationV20
     */
    public function setRates($rates)
    {
      $this->rates = $rates;
      return $this;
    }

}
