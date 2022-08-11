<?php

namespace App\models\ATSFlight;

class ChangeFlightRequestData
{

    /**
     * @var AcceptSurchargeEnum $AcceptSurcharge
     */
    protected $AcceptSurcharge = null;

    /**
     * @var ChangeFlightConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var string $MarketingCarrierCode
     */
    protected $MarketingCarrierCode = null;

    /**
     * @var string $Recordlocator
     */
    protected $Recordlocator = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var ArrayOfChangeFlightSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ChangeFlightSurcharge $SurchargeLevel
     */
    protected $SurchargeLevel = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return AcceptSurchargeEnum
     */
    public function getAcceptSurcharge()
    {
      return $this->AcceptSurcharge;
    }

    /**
     * @param AcceptSurchargeEnum $AcceptSurcharge
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setAcceptSurcharge($AcceptSurcharge)
    {
      $this->AcceptSurcharge = $AcceptSurcharge;
      return $this;
    }

    /**
     * @return ChangeFlightConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param ChangeFlightConfiguration $Configuration
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketingCarrierCode()
    {
      return $this->MarketingCarrierCode;
    }

    /**
     * @param string $MarketingCarrierCode
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setMarketingCarrierCode($MarketingCarrierCode)
    {
      $this->MarketingCarrierCode = $MarketingCarrierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordlocator()
    {
      return $this->Recordlocator;
    }

    /**
     * @param string $Recordlocator
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setRecordlocator($Recordlocator)
    {
      $this->Recordlocator = $Recordlocator;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordset()
    {
      return $this->Recordset;
    }

    /**
     * @param string $Recordset
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return ArrayOfChangeFlightSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfChangeFlightSegment $Segments
     * @return \App\models\ATSFlight\ChangeFlightRequestData
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
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ChangeFlightSurcharge
     */
    public function getSurchargeLevel()
    {
      return $this->SurchargeLevel;
    }

    /**
     * @param ChangeFlightSurcharge $SurchargeLevel
     * @return \App\models\ATSFlight\ChangeFlightRequestData
     */
    public function setSurchargeLevel($SurchargeLevel)
    {
      $this->SurchargeLevel = $SurchargeLevel;
      return $this;
    }

}
