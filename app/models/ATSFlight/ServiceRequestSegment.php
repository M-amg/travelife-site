<?php

namespace App\models\ATSFlight;

class ServiceRequestSegment extends SegmentData
{

    /**
     * @var ArrayOfstring $BookingClasses
     */
    protected $BookingClasses = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var ClassTypeEnum $CabinClasses
     */
    protected $CabinClasses = null;

    /**
     * @var GDSSubFareTypeEnum $SubFareTypeEnum
     */
    protected $SubFareTypeEnum = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfstring
     */
    public function getBookingClasses()
    {
      return $this->BookingClasses;
    }

    /**
     * @param ArrayOfstring $BookingClasses
     * @return \App\models\ATSFlight\ServiceRequestSegment
     */
    public function setBookingClasses($BookingClasses)
    {
      $this->BookingClasses = $BookingClasses;
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
     * @return \App\models\ATSFlight\ServiceRequestSegment
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClasses()
    {
      return $this->CabinClasses;
    }

    /**
     * @param ClassTypeEnum $CabinClasses
     * @return \App\models\ATSFlight\ServiceRequestSegment
     */
    public function setCabinClasses($CabinClasses)
    {
      $this->CabinClasses = $CabinClasses;
      return $this;
    }

    /**
     * @return GDSSubFareTypeEnum
     */
    public function getSubFareTypeEnum()
    {
      return $this->SubFareTypeEnum;
    }

    /**
     * @param GDSSubFareTypeEnum $SubFareTypeEnum
     * @return \App\models\ATSFlight\ServiceRequestSegment
     */
    public function setSubFareTypeEnum($SubFareTypeEnum)
    {
      $this->SubFareTypeEnum = $SubFareTypeEnum;
      return $this;
    }

}
