<?php

namespace App\models\ATSFlight;

class SeatResResponseData
{

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfSeatResResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\SeatResResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfSeatResResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfSeatResResponseSegment $Segments
     * @return \App\models\ATSFlight\SeatResResponseData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\SeatResResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
