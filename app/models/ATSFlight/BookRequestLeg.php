<?php

namespace App\models\ATSFlight;

class BookRequestLeg
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var ClassTypeEnum $MajorCabinClass
     */
    protected $MajorCabinClass = null;

    /**
     * @var ArrayOfBookRequestSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAvailString()
    {
      return $this->AvailString;
    }

    /**
     * @param string $AvailString
     * @return \App\models\ATSFlight\BookRequestLeg
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
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
     * @return \App\models\ATSFlight\BookRequestLeg
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getMajorCabinClass()
    {
      return $this->MajorCabinClass;
    }

    /**
     * @param ClassTypeEnum $MajorCabinClass
     * @return \App\models\ATSFlight\BookRequestLeg
     */
    public function setMajorCabinClass($MajorCabinClass)
    {
      $this->MajorCabinClass = $MajorCabinClass;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfBookRequestSegment $Segments
     * @return \App\models\ATSFlight\BookRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
