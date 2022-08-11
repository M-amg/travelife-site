<?php

namespace App\models\ATSFlight;

class RequestGDSData extends GDSFares
{

    /**
     * @var BrandedFareEnum $BrandedFares
     */
    protected $BrandedFares = null;

    /**
     * @var ArrayOfRequestFareGroupBag $ExtendedFareGroupBags
     */
    protected $ExtendedFareGroupBags = null;

    /**
     * @var ArrayOfRequestFareGroup $ExtendedFareGroups
     */
    protected $ExtendedFareGroups = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var string $IncludeCorpCodeDBCode
     */
    protected $IncludeCorpCodeDBCode = null;

    /**
     * @param GDSTypeEnum $GDSTypes
     * @param int $NumberOfFares
     */
    public function __construct($GDSTypes, $NumberOfFares)
    {
      parent::__construct($GDSTypes, $NumberOfFares);
    }

    /**
     * @return BrandedFareEnum
     */
    public function getBrandedFares()
    {
      return $this->BrandedFares;
    }

    /**
     * @param BrandedFareEnum $BrandedFares
     * @return \App\models\ATSFlight\RequestGDSData
     */
    public function setBrandedFares($BrandedFares)
    {
      $this->BrandedFares = $BrandedFares;
      return $this;
    }

    /**
     * @return ArrayOfRequestFareGroupBag
     */
    public function getExtendedFareGroupBags()
    {
      return $this->ExtendedFareGroupBags;
    }

    /**
     * @param ArrayOfRequestFareGroupBag $ExtendedFareGroupBags
     * @return \App\models\ATSFlight\RequestGDSData
     */
    public function setExtendedFareGroupBags($ExtendedFareGroupBags)
    {
      $this->ExtendedFareGroupBags = $ExtendedFareGroupBags;
      return $this;
    }

    /**
     * @return ArrayOfRequestFareGroup
     */
    public function getExtendedFareGroups()
    {
      return $this->ExtendedFareGroups;
    }

    /**
     * @param ArrayOfRequestFareGroup $ExtendedFareGroups
     * @return \App\models\ATSFlight\RequestGDSData
     */
    public function setExtendedFareGroups($ExtendedFareGroups)
    {
      $this->ExtendedFareGroups = $ExtendedFareGroups;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFareGroups()
    {
      return $this->FareGroups;
    }

    /**
     * @param ArrayOfstring $FareGroups
     * @return \App\models\ATSFlight\RequestGDSData
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncludeCorpCodeDBCode()
    {
      return $this->IncludeCorpCodeDBCode;
    }

    /**
     * @param string $IncludeCorpCodeDBCode
     * @return \App\models\ATSFlight\RequestGDSData
     */
    public function setIncludeCorpCodeDBCode($IncludeCorpCodeDBCode)
    {
      $this->IncludeCorpCodeDBCode = $IncludeCorpCodeDBCode;
      return $this;
    }

}
