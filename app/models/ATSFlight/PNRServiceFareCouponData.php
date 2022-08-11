<?php

namespace App\models\ATSFlight;

class PNRServiceFareCouponData
{

    /**
     * @var ServiceBookTypeEnum $BookingType
     */
    protected $BookingType = null;

    /**
     * @var string $BookingTypeCode
     */
    protected $BookingTypeCode = null;

    /**
     * @var string $BookingTypeID
     */
    protected $BookingTypeID = null;

    /**
     * @var string $BookingTypeText
     */
    protected $BookingTypeText = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var boolean $Exchangeable
     */
    protected $Exchangeable = null;

    /**
     * @var string $Extensions
     */
    protected $Extensions = null;

    /**
     * @var \DateTime $LastEMDDate
     */
    protected $LastEMDDate = null;

    /**
     * @var \DateTime $NotValidAfter
     */
    protected $NotValidAfter = null;

    /**
     * @var \DateTime $NotValidBefore
     */
    protected $NotValidBefore = null;

    /**
     * @var boolean $Refundable
     */
    protected $Refundable = null;

    /**
     * @var int $SegmentNumber
     */
    protected $SegmentNumber = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $ServiceText
     */
    protected $ServiceText = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceBookTypeEnum
     */
    public function getBookingType()
    {
      return $this->BookingType;
    }

    /**
     * @param ServiceBookTypeEnum $BookingType
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setBookingType($BookingType)
    {
      $this->BookingType = $BookingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTypeCode()
    {
      return $this->BookingTypeCode;
    }

    /**
     * @param string $BookingTypeCode
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setBookingTypeCode($BookingTypeCode)
    {
      $this->BookingTypeCode = $BookingTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTypeID()
    {
      return $this->BookingTypeID;
    }

    /**
     * @param string $BookingTypeID
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setBookingTypeID($BookingTypeID)
    {
      $this->BookingTypeID = $BookingTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTypeText()
    {
      return $this->BookingTypeText;
    }

    /**
     * @param string $BookingTypeText
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setBookingTypeText($BookingTypeText)
    {
      $this->BookingTypeText = $BookingTypeText;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeable()
    {
      return $this->Exchangeable;
    }

    /**
     * @param boolean $Exchangeable
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtensions()
    {
      return $this->Extensions;
    }

    /**
     * @param string $Extensions
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastEMDDate()
    {
      if ($this->LastEMDDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastEMDDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastEMDDate
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setLastEMDDate(\DateTime $LastEMDDate = null)
    {
      if ($LastEMDDate == null) {
       $this->LastEMDDate = null;
      } else {
        $this->LastEMDDate = $LastEMDDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNotValidAfter()
    {
      if ($this->NotValidAfter == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NotValidAfter);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NotValidAfter
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setNotValidAfter(\DateTime $NotValidAfter = null)
    {
      if ($NotValidAfter == null) {
       $this->NotValidAfter = null;
      } else {
        $this->NotValidAfter = $NotValidAfter->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNotValidBefore()
    {
      if ($this->NotValidBefore == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NotValidBefore);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NotValidBefore
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setNotValidBefore(\DateTime $NotValidBefore = null)
    {
      if ($NotValidBefore == null) {
       $this->NotValidBefore = null;
      } else {
        $this->NotValidBefore = $NotValidBefore->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param int $SegmentNumber
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
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
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
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
     * @return \App\models\ATSFlight\PNRServiceFareCouponData
     */
    public function setServiceText($ServiceText)
    {
      $this->ServiceText = $ServiceText;
      return $this;
    }

}
