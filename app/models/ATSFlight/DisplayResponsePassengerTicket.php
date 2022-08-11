<?php

namespace App\models\ATSFlight;

class DisplayResponsePassengerTicket
{

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var string $BaggageDetail
     */
    protected $BaggageDetail = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $NVA
     */
    protected $NVA = null;

    /**
     * @var string $NVALast
     */
    protected $NVALast = null;

    /**
     * @var string $NVB
     */
    protected $NVB = null;

    /**
     * @var string $NVBFirst
     */
    protected $NVBFirst = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var string $Tourcode
     */
    protected $Tourcode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBaggage()
    {
      return $this->Baggage;
    }

    /**
     * @param string $Baggage
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
      return $this;
    }

    /**
     * @return string
     */
    public function getBaggageDetail()
    {
      return $this->BaggageDetail;
    }

    /**
     * @param string $BaggageDetail
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setBaggageDetail($BaggageDetail)
    {
      $this->BaggageDetail = $BaggageDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVA()
    {
      return $this->NVA;
    }

    /**
     * @param string $NVA
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setNVA($NVA)
    {
      $this->NVA = $NVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVALast()
    {
      return $this->NVALast;
    }

    /**
     * @param string $NVALast
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setNVALast($NVALast)
    {
      $this->NVALast = $NVALast;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVB()
    {
      return $this->NVB;
    }

    /**
     * @param string $NVB
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setNVB($NVB)
    {
      $this->NVB = $NVB;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVBFirst()
    {
      return $this->NVBFirst;
    }

    /**
     * @param string $NVBFirst
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setNVBFirst($NVBFirst)
    {
      $this->NVBFirst = $NVBFirst;
      return $this;
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
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourcode()
    {
      return $this->Tourcode;
    }

    /**
     * @param string $Tourcode
     * @return \App\models\ATSFlight\DisplayResponsePassengerTicket
     */
    public function setTourcode($Tourcode)
    {
      $this->Tourcode = $Tourcode;
      return $this;
    }

}
