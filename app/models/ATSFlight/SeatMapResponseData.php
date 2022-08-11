<?php

namespace App\models\ATSFlight;

class SeatMapResponseData
{

    /**
     * @var ArrayOfSeatMapExceptionData $Exceptions
     */
    protected $Exceptions = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfSeatMapData $SeatMaps
     */
    protected $SeatMaps = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSeatMapExceptionData
     */
    public function getExceptions()
    {
      return $this->Exceptions;
    }

    /**
     * @param ArrayOfSeatMapExceptionData $Exceptions
     * @return \App\models\ATSFlight\SeatMapResponseData
     */
    public function setExceptions($Exceptions)
    {
      $this->Exceptions = $Exceptions;
      return $this;
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
     * @return \App\models\ATSFlight\SeatMapResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapData
     */
    public function getSeatMaps()
    {
      return $this->SeatMaps;
    }

    /**
     * @param ArrayOfSeatMapData $SeatMaps
     * @return \App\models\ATSFlight\SeatMapResponseData
     */
    public function setSeatMaps($SeatMaps)
    {
      $this->SeatMaps = $SeatMaps;
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
     * @return \App\models\ATSFlight\SeatMapResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
