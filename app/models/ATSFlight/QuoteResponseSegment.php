<?php

namespace App\models\ATSFlight;

class QuoteResponseSegment
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var ClassTypeEnum $CabinClassName
     */
    protected $CabinClassName = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $FreeBaggageAllowance
     */
    protected $FreeBaggageAllowance = null;

    /**
     * @var boolean $IgnoreTax
     */
    protected $IgnoreTax = null;

    /**
     * @var string $Mileage
     */
    protected $Mileage = null;

    /**
     * @var boolean $TicketBySupplier
     */
    protected $TicketBySupplier = null;

    /**
     * @var string $TicketDesignator
     */
    protected $TicketDesignator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
      return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClassName()
    {
      return $this->CabinClassName;
    }

    /**
     * @param ClassTypeEnum $CabinClassName
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setCabinClassName($CabinClassName)
    {
      $this->CabinClassName = $CabinClassName;
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
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeBaggageAllowance()
    {
      return $this->FreeBaggageAllowance;
    }

    /**
     * @param string $FreeBaggageAllowance
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setFreeBaggageAllowance($FreeBaggageAllowance)
    {
      $this->FreeBaggageAllowance = $FreeBaggageAllowance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreTax()
    {
      return $this->IgnoreTax;
    }

    /**
     * @param boolean $IgnoreTax
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setIgnoreTax($IgnoreTax)
    {
      $this->IgnoreTax = $IgnoreTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getMileage()
    {
      return $this->Mileage;
    }

    /**
     * @param string $Mileage
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setMileage($Mileage)
    {
      $this->Mileage = $Mileage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketBySupplier()
    {
      return $this->TicketBySupplier;
    }

    /**
     * @param boolean $TicketBySupplier
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setTicketBySupplier($TicketBySupplier)
    {
      $this->TicketBySupplier = $TicketBySupplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param string $TicketDesignator
     * @return \App\models\ATSFlight\QuoteResponseSegment
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

}
