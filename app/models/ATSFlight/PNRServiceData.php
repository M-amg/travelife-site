<?php

namespace App\models\ATSFlight;

class PNRServiceData
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var boolean $Chargeable
     */
    protected $Chargeable = null;

    /**
     * @var boolean $IsIssued
     */
    protected $IsIssued = null;

    /**
     * @var ArrayOfint $PassengerNumbers
     */
    protected $PassengerNumbers = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $ServiceText
     */
    protected $ServiceText = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeable()
    {
      return $this->Chargeable;
    }

    /**
     * @param boolean $Chargeable
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setChargeable($Chargeable)
    {
      $this->Chargeable = $Chargeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIssued()
    {
      return $this->IsIssued;
    }

    /**
     * @param boolean $IsIssued
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setIsIssued($IsIssued)
    {
      $this->IsIssued = $IsIssued;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerNumbers()
    {
      return $this->PassengerNumbers;
    }

    /**
     * @param ArrayOfint $PassengerNumbers
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setPassengerNumbers($PassengerNumbers)
    {
      $this->PassengerNumbers = $PassengerNumbers;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceText()
    {
      return $this->ServiceText;
    }

    /**
     * @param string $ServiceText
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setServiceText($ServiceText)
    {
      $this->ServiceText = $ServiceText;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\PNRServiceData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
