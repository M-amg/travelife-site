<?php

namespace App\models\ATSFlight;

class GetFareRestrictionData
{

    /**
     * @var boolean $AllowEmptySupplier
     */
    protected $AllowEmptySupplier = null;

    /**
     * @var boolean $AllowGetFare4CorpCodeCarriers
     */
    protected $AllowGetFare4CorpCodeCarriers = null;

    /**
     * @var PermittedFareTypeEnum $AllowedGetFareQuoteType
     */
    protected $AllowedGetFareQuoteType = null;

    /**
     * @var int $DefaultMaxConnections
     */
    protected $DefaultMaxConnections = null;

    /**
     * @var int $MaxCorpCodeRequests
     */
    protected $MaxCorpCodeRequests = null;

    /**
     * @var int $MaximumAlternatives
     */
    protected $MaximumAlternatives = null;

    /**
     * @var int $MaximumCRS
     */
    protected $MaximumCRS = null;

    /**
     * @var int $MaximumFares
     */
    protected $MaximumFares = null;

    /**
     * @var int $MaximumSearchNetFares
     */
    protected $MaximumSearchNetFares = null;

    /**
     * @var int $MaximumSimultaneousAvails
     */
    protected $MaximumSimultaneousAvails = null;

    /**
     * @var int $MaximumTimeout
     */
    protected $MaximumTimeout = null;

    /**
     * @var int $MaximumWebFareArrivalSearchRadius
     */
    protected $MaximumWebFareArrivalSearchRadius = null;

    /**
     * @var int $MaximumWebFareDepartureSearchRadius
     */
    protected $MaximumWebFareDepartureSearchRadius = null;

    /**
     * @var int $MinimumDepartureCodes
     */
    protected $MinimumDepartureCodes = null;

    /**
     * @var int $NumberOfNetFares
     */
    protected $NumberOfNetFares = null;

    /**
     * @var int $NumberOfPublishedFares
     */
    protected $NumberOfPublishedFares = null;

    /**
     * @var int $NumberOfSupplier
     */
    protected $NumberOfSupplier = null;

    /**
     * @var int $ToleranceMaxCheckAhead
     */
    protected $ToleranceMaxCheckAhead = null;

    /**
     * @var int $ToleranceMaxCheckBack
     */
    protected $ToleranceMaxCheckBack = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllowEmptySupplier()
    {
      return $this->AllowEmptySupplier;
    }

    /**
     * @param boolean $AllowEmptySupplier
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setAllowEmptySupplier($AllowEmptySupplier)
    {
      $this->AllowEmptySupplier = $AllowEmptySupplier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowGetFare4CorpCodeCarriers()
    {
      return $this->AllowGetFare4CorpCodeCarriers;
    }

    /**
     * @param boolean $AllowGetFare4CorpCodeCarriers
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setAllowGetFare4CorpCodeCarriers($AllowGetFare4CorpCodeCarriers)
    {
      $this->AllowGetFare4CorpCodeCarriers = $AllowGetFare4CorpCodeCarriers;
      return $this;
    }

    /**
     * @return PermittedFareTypeEnum
     */
    public function getAllowedGetFareQuoteType()
    {
      return $this->AllowedGetFareQuoteType;
    }

    /**
     * @param PermittedFareTypeEnum $AllowedGetFareQuoteType
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setAllowedGetFareQuoteType($AllowedGetFareQuoteType)
    {
      $this->AllowedGetFareQuoteType = $AllowedGetFareQuoteType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultMaxConnections()
    {
      return $this->DefaultMaxConnections;
    }

    /**
     * @param int $DefaultMaxConnections
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setDefaultMaxConnections($DefaultMaxConnections)
    {
      $this->DefaultMaxConnections = $DefaultMaxConnections;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCorpCodeRequests()
    {
      return $this->MaxCorpCodeRequests;
    }

    /**
     * @param int $MaxCorpCodeRequests
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaxCorpCodeRequests($MaxCorpCodeRequests)
    {
      $this->MaxCorpCodeRequests = $MaxCorpCodeRequests;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumAlternatives()
    {
      return $this->MaximumAlternatives;
    }

    /**
     * @param int $MaximumAlternatives
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumAlternatives($MaximumAlternatives)
    {
      $this->MaximumAlternatives = $MaximumAlternatives;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumCRS()
    {
      return $this->MaximumCRS;
    }

    /**
     * @param int $MaximumCRS
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumCRS($MaximumCRS)
    {
      $this->MaximumCRS = $MaximumCRS;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumFares()
    {
      return $this->MaximumFares;
    }

    /**
     * @param int $MaximumFares
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumFares($MaximumFares)
    {
      $this->MaximumFares = $MaximumFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumSearchNetFares()
    {
      return $this->MaximumSearchNetFares;
    }

    /**
     * @param int $MaximumSearchNetFares
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumSearchNetFares($MaximumSearchNetFares)
    {
      $this->MaximumSearchNetFares = $MaximumSearchNetFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumSimultaneousAvails()
    {
      return $this->MaximumSimultaneousAvails;
    }

    /**
     * @param int $MaximumSimultaneousAvails
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumSimultaneousAvails($MaximumSimultaneousAvails)
    {
      $this->MaximumSimultaneousAvails = $MaximumSimultaneousAvails;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumTimeout()
    {
      return $this->MaximumTimeout;
    }

    /**
     * @param int $MaximumTimeout
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumTimeout($MaximumTimeout)
    {
      $this->MaximumTimeout = $MaximumTimeout;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumWebFareArrivalSearchRadius()
    {
      return $this->MaximumWebFareArrivalSearchRadius;
    }

    /**
     * @param int $MaximumWebFareArrivalSearchRadius
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumWebFareArrivalSearchRadius($MaximumWebFareArrivalSearchRadius)
    {
      $this->MaximumWebFareArrivalSearchRadius = $MaximumWebFareArrivalSearchRadius;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumWebFareDepartureSearchRadius()
    {
      return $this->MaximumWebFareDepartureSearchRadius;
    }

    /**
     * @param int $MaximumWebFareDepartureSearchRadius
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMaximumWebFareDepartureSearchRadius($MaximumWebFareDepartureSearchRadius)
    {
      $this->MaximumWebFareDepartureSearchRadius = $MaximumWebFareDepartureSearchRadius;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumDepartureCodes()
    {
      return $this->MinimumDepartureCodes;
    }

    /**
     * @param int $MinimumDepartureCodes
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setMinimumDepartureCodes($MinimumDepartureCodes)
    {
      $this->MinimumDepartureCodes = $MinimumDepartureCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNetFares()
    {
      return $this->NumberOfNetFares;
    }

    /**
     * @param int $NumberOfNetFares
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setNumberOfNetFares($NumberOfNetFares)
    {
      $this->NumberOfNetFares = $NumberOfNetFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPublishedFares()
    {
      return $this->NumberOfPublishedFares;
    }

    /**
     * @param int $NumberOfPublishedFares
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setNumberOfPublishedFares($NumberOfPublishedFares)
    {
      $this->NumberOfPublishedFares = $NumberOfPublishedFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfSupplier()
    {
      return $this->NumberOfSupplier;
    }

    /**
     * @param int $NumberOfSupplier
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setNumberOfSupplier($NumberOfSupplier)
    {
      $this->NumberOfSupplier = $NumberOfSupplier;
      return $this;
    }

    /**
     * @return int
     */
    public function getToleranceMaxCheckAhead()
    {
      return $this->ToleranceMaxCheckAhead;
    }

    /**
     * @param int $ToleranceMaxCheckAhead
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setToleranceMaxCheckAhead($ToleranceMaxCheckAhead)
    {
      $this->ToleranceMaxCheckAhead = $ToleranceMaxCheckAhead;
      return $this;
    }

    /**
     * @return int
     */
    public function getToleranceMaxCheckBack()
    {
      return $this->ToleranceMaxCheckBack;
    }

    /**
     * @param int $ToleranceMaxCheckBack
     * @return \App\models\ATSFlight\GetFareRestrictionData
     */
    public function setToleranceMaxCheckBack($ToleranceMaxCheckBack)
    {
      $this->ToleranceMaxCheckBack = $ToleranceMaxCheckBack;
      return $this;
    }

}
