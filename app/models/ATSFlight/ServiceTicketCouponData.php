<?php

namespace App\models\ATSFlight;

class ServiceTicketCouponData
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var TicketStatusEnum $CouponStatus
     */
    protected $CouponStatus = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var string $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var string $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var string $Extensions
     */
    protected $Extensions = null;

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
     * @return string
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return TicketStatusEnum
     */
    public function getCouponStatus()
    {
      return $this->CouponStatus;
    }

    /**
     * @param TicketStatusEnum $CouponStatus
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setCouponStatus($CouponStatus)
    {
      $this->CouponStatus = $CouponStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param string $DocumentType
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
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
     * @return \App\models\ATSFlight\ServiceTicketCouponData
     */
    public function setServiceText($ServiceText)
    {
      $this->ServiceText = $ServiceText;
      return $this;
    }

}
