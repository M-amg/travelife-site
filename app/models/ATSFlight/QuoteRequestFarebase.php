<?php

namespace App\models\ATSFlight;

class QuoteRequestFarebase
{

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var string $PublishedFareFarebase
     */
    protected $PublishedFareFarebase = null;

    /**
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($PassengerType)
    {
      $this->PassengerType = $PassengerType;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\QuoteRequestFarebase
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublishedFareFarebase()
    {
      return $this->PublishedFareFarebase;
    }

    /**
     * @param string $PublishedFareFarebase
     * @return \App\models\ATSFlight\QuoteRequestFarebase
     */
    public function setPublishedFareFarebase($PublishedFareFarebase)
    {
      $this->PublishedFareFarebase = $PublishedFareFarebase;
      return $this;
    }

}
