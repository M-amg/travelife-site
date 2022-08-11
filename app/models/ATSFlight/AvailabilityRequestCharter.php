<?php

namespace App\models\ATSFlight;

class AvailabilityRequestCharter
{

    /**
     * @var CharterAccount $Account
     */
    protected $Account = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var boolean $IsLiveBooking
     */
    protected $IsLiveBooking = null;

    /**
     * @var string $TouroperatorCode
     */
    protected $TouroperatorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CharterAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param CharterAccount $Account
     * @return \App\models\ATSFlight\AvailabilityRequestCharter
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param string $FareType
     * @return \App\models\ATSFlight\AvailabilityRequestCharter
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLiveBooking()
    {
      return $this->IsLiveBooking;
    }

    /**
     * @param boolean $IsLiveBooking
     * @return \App\models\ATSFlight\AvailabilityRequestCharter
     */
    public function setIsLiveBooking($IsLiveBooking)
    {
      $this->IsLiveBooking = $IsLiveBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getTouroperatorCode()
    {
      return $this->TouroperatorCode;
    }

    /**
     * @param string $TouroperatorCode
     * @return \App\models\ATSFlight\AvailabilityRequestCharter
     */
    public function setTouroperatorCode($TouroperatorCode)
    {
      $this->TouroperatorCode = $TouroperatorCode;
      return $this;
    }

}
