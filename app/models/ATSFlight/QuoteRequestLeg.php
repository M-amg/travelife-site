<?php

namespace App\models\ATSFlight;

class QuoteRequestLeg
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var int $FareGroup
     */
    protected $FareGroup = null;

    /**
     * @var QuoteFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var string $LegAirline
     */
    protected $LegAirline = null;

    /**
     * @var ClassTypeEnum $LegCabinClass
     */
    protected $LegCabinClass = null;

    /**
     * @var ArrayOfstring $SegmentIDs
     */
    protected $SegmentIDs = null;

    /**
     * @var ArrayOfQuoteRequestSegment $Segments
     */
    protected $Segments = null;

    /**
     * @param int $FareGroup
     * @param QuoteFareTypeEnum $FareType
     */
    public function __construct($FareGroup, $FareType)
    {
      $this->FareGroup = $FareGroup;
      $this->FareType = $FareType;
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
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareGroup()
    {
      return $this->FareGroup;
    }

    /**
     * @param int $FareGroup
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setFareGroup($FareGroup)
    {
      $this->FareGroup = $FareGroup;
      return $this;
    }

    /**
     * @return QuoteFareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param QuoteFareTypeEnum $FareType
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegAirline()
    {
      return $this->LegAirline;
    }

    /**
     * @param string $LegAirline
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setLegAirline($LegAirline)
    {
      $this->LegAirline = $LegAirline;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getLegCabinClass()
    {
      return $this->LegCabinClass;
    }

    /**
     * @param ClassTypeEnum $LegCabinClass
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setLegCabinClass($LegCabinClass)
    {
      $this->LegCabinClass = $LegCabinClass;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSegmentIDs()
    {
      return $this->SegmentIDs;
    }

    /**
     * @param ArrayOfstring $SegmentIDs
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setSegmentIDs($SegmentIDs)
    {
      $this->SegmentIDs = $SegmentIDs;
      return $this;
    }

    /**
     * @return ArrayOfQuoteRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfQuoteRequestSegment $Segments
     * @return \App\models\ATSFlight\QuoteRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
