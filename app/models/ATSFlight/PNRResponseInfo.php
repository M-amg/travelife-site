<?php

namespace App\models\ATSFlight;

class PNRResponseInfo
{

    /**
     * @var string $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var string $CRS
     */
    protected $CRS = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $PNRType
     */
    protected $PNRType = null;

    /**
     * @var PnrTypeEnum $PassengerNameRecordType
     */
    protected $PassengerNameRecordType = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var string $UnknownPNRType
     */
    protected $UnknownPNRType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param string $BookingStatus
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCRS()
    {
      return $this->CRS;
    }

    /**
     * @param string $CRS
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setCRS($CRS)
    {
      $this->CRS = $CRS;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setCreatedDate(\DateTime $CreatedDate = null)
    {
      if ($CreatedDate == null) {
       $this->CreatedDate = null;
      } else {
        $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPNRType()
    {
      return $this->PNRType;
    }

    /**
     * @param string $PNRType
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setPNRType($PNRType)
    {
      $this->PNRType = $PNRType;
      return $this;
    }

    /**
     * @return PnrTypeEnum
     */
    public function getPassengerNameRecordType()
    {
      return $this->PassengerNameRecordType;
    }

    /**
     * @param PnrTypeEnum $PassengerNameRecordType
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setPassengerNameRecordType($PassengerNameRecordType)
    {
      $this->PassengerNameRecordType = $PassengerNameRecordType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnknownPNRType()
    {
      return $this->UnknownPNRType;
    }

    /**
     * @param string $UnknownPNRType
     * @return \App\models\ATSFlight\PNRResponseInfo
     */
    public function setUnknownPNRType($UnknownPNRType)
    {
      $this->UnknownPNRType = $UnknownPNRType;
      return $this;
    }

}
