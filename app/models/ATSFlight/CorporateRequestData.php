<?php

namespace App\models\ATSFlight;

class CorporateRequestData
{

    /**
     * @var GDSEnum $CRSName
     */
    protected $CRSName = null;

    /**
     * @var ArrayOfstring $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $DatabaseCode
     */
    protected $DatabaseCode = null;

    /**
     * @var string $Destination
     */
    protected $Destination = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var string $Origin
     */
    protected $Origin = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @param GDSEnum $CRSName
     */
    public function __construct($CRSName)
    {
      $this->CRSName = $CRSName;
    }

    /**
     * @return GDSEnum
     */
    public function getCRSName()
    {
      return $this->CRSName;
    }

    /**
     * @param GDSEnum $CRSName
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setCRSName($CRSName)
    {
      $this->CRSName = $CRSName;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param ArrayOfstring $Carrier
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseCode()
    {
      return $this->DatabaseCode;
    }

    /**
     * @param string $DatabaseCode
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setDatabaseCode($DatabaseCode)
    {
      $this->DatabaseCode = $DatabaseCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param string $Destination
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchCodes()
    {
      return $this->MatchCodes;
    }

    /**
     * @param ArrayOfstring $MatchCodes
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\CorporateRequestData
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

}
