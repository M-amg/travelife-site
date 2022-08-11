<?php

namespace App\models\ATSFlight;

class PNRServiceFareData
{

    /**
     * @var ArrayOfPNRServiceFareCouponData $Coupons
     */
    protected $Coupons = null;

    /**
     * @var string $DocumentType
     */
    protected $DocumentType = null;

    /**
     * @var boolean $EMDRequired
     */
    protected $EMDRequired = null;

    /**
     * @var SharedPrice $EquivalentServicePrice
     */
    protected $EquivalentServicePrice = null;

    /**
     * @var string $Extensions
     */
    protected $Extensions = null;

    /**
     * @var string $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var \DateTime $LastEMDDate
     */
    protected $LastEMDDate = null;

    /**
     * @var int $PassengerNumber
     */
    protected $PassengerNumber = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var \DateTime $ServiceCreationDate
     */
    protected $ServiceCreationDate = null;

    /**
     * @var SharedPrice $ServicePrice
     */
    protected $ServicePrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfPNRServiceFareCouponData
     */
    public function getCoupons()
    {
      return $this->Coupons;
    }

    /**
     * @param ArrayOfPNRServiceFareCouponData $Coupons
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setCoupons($Coupons)
    {
      $this->Coupons = $Coupons;
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
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEMDRequired()
    {
      return $this->EMDRequired;
    }

    /**
     * @param boolean $EMDRequired
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setEMDRequired($EMDRequired)
    {
      $this->EMDRequired = $EMDRequired;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentServicePrice()
    {
      return $this->EquivalentServicePrice;
    }

    /**
     * @param SharedPrice $EquivalentServicePrice
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setEquivalentServicePrice($EquivalentServicePrice)
    {
      $this->EquivalentServicePrice = $EquivalentServicePrice;
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
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalculation()
    {
      return $this->FareCalculation;
    }

    /**
     * @param string $FareCalculation
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
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
     * @return \App\models\ATSFlight\PNRServiceFareData
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
     * @return int
     */
    public function getPassengerNumber()
    {
      return $this->PassengerNumber;
    }

    /**
     * @param int $PassengerNumber
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setPassengerNumber($PassengerNumber)
    {
      $this->PassengerNumber = $PassengerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param string $PlatingCarrier
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getServiceCreationDate()
    {
      if ($this->ServiceCreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ServiceCreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ServiceCreationDate
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setServiceCreationDate(\DateTime $ServiceCreationDate = null)
    {
      if ($ServiceCreationDate == null) {
       $this->ServiceCreationDate = null;
      } else {
        $this->ServiceCreationDate = $ServiceCreationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getServicePrice()
    {
      return $this->ServicePrice;
    }

    /**
     * @param SharedPrice $ServicePrice
     * @return \App\models\ATSFlight\PNRServiceFareData
     */
    public function setServicePrice($ServicePrice)
    {
      $this->ServicePrice = $ServicePrice;
      return $this;
    }

}
