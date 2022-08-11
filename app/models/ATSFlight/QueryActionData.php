<?php

namespace App\models\ATSFlight;

class QueryActionData
{

    /**
     * @var string $CRSProfileLink
     */
    protected $CRSProfileLink = null;

    /**
     * @var ClassTypeEnum $CabinClasses
     */
    protected $CabinClasses = null;

    /**
     * @var ArrayOfCarrierData $Carriers
     */
    protected $Carriers = null;

    /**
     * @var ChannelTypeEnum $Channel
     */
    protected $Channel = null;

    /**
     * @var ArrayOfstring $CharterHosts
     */
    protected $CharterHosts = null;

    /**
     * @var ArrayOfstring $CharterTouroperators
     */
    protected $CharterTouroperators = null;

    /**
     * @var ArrayOfstring $CorporateCodes
     */
    protected $CorporateCodes = null;

    /**
     * @var ArrayOfstring $Destinations
     */
    protected $Destinations = null;

    /**
     * @var boolean $FallbackIncludeExclude
     */
    protected $FallbackIncludeExclude = null;

    /**
     * @var boolean $FallbackToOriginDestination
     */
    protected $FallbackToOriginDestination = null;

    /**
     * @var string $GUID
     */
    protected $GUID = null;

    /**
     * @var boolean $IncludeRailAndFly
     */
    protected $IncludeRailAndFly = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var int $MaxConnections
     */
    protected $MaxConnections = null;

    /**
     * @var PassengerTypeEnum $NegoFareType
     */
    protected $NegoFareType = null;

    /**
     * @var ArrayOfstring $NetFareDatabaseCodes
     */
    protected $NetFareDatabaseCodes = null;

    /**
     * @var int $NumberOfCharterFares
     */
    protected $NumberOfCharterFares = null;

    /**
     * @var int $NumberOfNetFares
     */
    protected $NumberOfNetFares = null;

    /**
     * @var int $NumberOfNetSearchFares
     */
    protected $NumberOfNetSearchFares = null;

    /**
     * @var int $NumberOfPubFares
     */
    protected $NumberOfPubFares = null;

    /**
     * @var int $NumberOfWebFares
     */
    protected $NumberOfWebFares = null;

    /**
     * @var ArrayOfstring $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfstring $PercentageDatabaseCodes
     */
    protected $PercentageDatabaseCodes = null;

    /**
     * @var boolean $ReturnDirectFlightsOnly
     */
    protected $ReturnDirectFlightsOnly = null;

    /**
     * @var SubChannelTypeEnum $SubChannel
     */
    protected $SubChannel = null;

    /**
     * @var int $XPSearchConcurrentAvails
     */
    protected $XPSearchConcurrentAvails = null;

    /**
     * @var int $XPSearchMaxConnections
     */
    protected $XPSearchMaxConnections = null;

    /**
     * @var int $XPSearchMaxMoveDowns
     */
    protected $XPSearchMaxMoveDowns = null;

    /**
     * @var XPSearchModeEnum $XPSearchMode
     */
    protected $XPSearchMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCRSProfileLink()
    {
      return $this->CRSProfileLink;
    }

    /**
     * @param string $CRSProfileLink
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCRSProfileLink($CRSProfileLink)
    {
      $this->CRSProfileLink = $CRSProfileLink;
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
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCabinClasses($CabinClasses)
    {
      $this->CabinClasses = $CabinClasses;
      return $this;
    }

    /**
     * @return ArrayOfCarrierData
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfCarrierData $Carriers
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return ChannelTypeEnum
     */
    public function getChannel()
    {
      return $this->Channel;
    }

    /**
     * @param ChannelTypeEnum $Channel
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setChannel($Channel)
    {
      $this->Channel = $Channel;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCharterHosts()
    {
      return $this->CharterHosts;
    }

    /**
     * @param ArrayOfstring $CharterHosts
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCharterHosts($CharterHosts)
    {
      $this->CharterHosts = $CharterHosts;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCharterTouroperators()
    {
      return $this->CharterTouroperators;
    }

    /**
     * @param ArrayOfstring $CharterTouroperators
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCharterTouroperators($CharterTouroperators)
    {
      $this->CharterTouroperators = $CharterTouroperators;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCorporateCodes()
    {
      return $this->CorporateCodes;
    }

    /**
     * @param ArrayOfstring $CorporateCodes
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setCorporateCodes($CorporateCodes)
    {
      $this->CorporateCodes = $CorporateCodes;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfstring $Destinations
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFallbackIncludeExclude()
    {
      return $this->FallbackIncludeExclude;
    }

    /**
     * @param boolean $FallbackIncludeExclude
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setFallbackIncludeExclude($FallbackIncludeExclude)
    {
      $this->FallbackIncludeExclude = $FallbackIncludeExclude;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFallbackToOriginDestination()
    {
      return $this->FallbackToOriginDestination;
    }

    /**
     * @param boolean $FallbackToOriginDestination
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setFallbackToOriginDestination($FallbackToOriginDestination)
    {
      $this->FallbackToOriginDestination = $FallbackToOriginDestination;
      return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeRailAndFly()
    {
      return $this->IncludeRailAndFly;
    }

    /**
     * @param boolean $IncludeRailAndFly
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setIncludeRailAndFly($IncludeRailAndFly)
    {
      $this->IncludeRailAndFly = $IncludeRailAndFly;
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
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnections()
    {
      return $this->MaxConnections;
    }

    /**
     * @param int $MaxConnections
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setMaxConnections($MaxConnections)
    {
      $this->MaxConnections = $MaxConnections;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getNegoFareType()
    {
      return $this->NegoFareType;
    }

    /**
     * @param PassengerTypeEnum $NegoFareType
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNegoFareType($NegoFareType)
    {
      $this->NegoFareType = $NegoFareType;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNetFareDatabaseCodes()
    {
      return $this->NetFareDatabaseCodes;
    }

    /**
     * @param ArrayOfstring $NetFareDatabaseCodes
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNetFareDatabaseCodes($NetFareDatabaseCodes)
    {
      $this->NetFareDatabaseCodes = $NetFareDatabaseCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCharterFares()
    {
      return $this->NumberOfCharterFares;
    }

    /**
     * @param int $NumberOfCharterFares
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNumberOfCharterFares($NumberOfCharterFares)
    {
      $this->NumberOfCharterFares = $NumberOfCharterFares;
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
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNumberOfNetFares($NumberOfNetFares)
    {
      $this->NumberOfNetFares = $NumberOfNetFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNetSearchFares()
    {
      return $this->NumberOfNetSearchFares;
    }

    /**
     * @param int $NumberOfNetSearchFares
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNumberOfNetSearchFares($NumberOfNetSearchFares)
    {
      $this->NumberOfNetSearchFares = $NumberOfNetSearchFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPubFares()
    {
      return $this->NumberOfPubFares;
    }

    /**
     * @param int $NumberOfPubFares
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNumberOfPubFares($NumberOfPubFares)
    {
      $this->NumberOfPubFares = $NumberOfPubFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfWebFares()
    {
      return $this->NumberOfWebFares;
    }

    /**
     * @param int $NumberOfWebFares
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setNumberOfWebFares($NumberOfWebFares)
    {
      $this->NumberOfWebFares = $NumberOfWebFares;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfstring $Origins
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPercentageDatabaseCodes()
    {
      return $this->PercentageDatabaseCodes;
    }

    /**
     * @param ArrayOfstring $PercentageDatabaseCodes
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setPercentageDatabaseCodes($PercentageDatabaseCodes)
    {
      $this->PercentageDatabaseCodes = $PercentageDatabaseCodes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnDirectFlightsOnly()
    {
      return $this->ReturnDirectFlightsOnly;
    }

    /**
     * @param boolean $ReturnDirectFlightsOnly
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setReturnDirectFlightsOnly($ReturnDirectFlightsOnly)
    {
      $this->ReturnDirectFlightsOnly = $ReturnDirectFlightsOnly;
      return $this;
    }

    /**
     * @return SubChannelTypeEnum
     */
    public function getSubChannel()
    {
      return $this->SubChannel;
    }

    /**
     * @param SubChannelTypeEnum $SubChannel
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setSubChannel($SubChannel)
    {
      $this->SubChannel = $SubChannel;
      return $this;
    }

    /**
     * @return int
     */
    public function getXPSearchConcurrentAvails()
    {
      return $this->XPSearchConcurrentAvails;
    }

    /**
     * @param int $XPSearchConcurrentAvails
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setXPSearchConcurrentAvails($XPSearchConcurrentAvails)
    {
      $this->XPSearchConcurrentAvails = $XPSearchConcurrentAvails;
      return $this;
    }

    /**
     * @return int
     */
    public function getXPSearchMaxConnections()
    {
      return $this->XPSearchMaxConnections;
    }

    /**
     * @param int $XPSearchMaxConnections
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setXPSearchMaxConnections($XPSearchMaxConnections)
    {
      $this->XPSearchMaxConnections = $XPSearchMaxConnections;
      return $this;
    }

    /**
     * @return int
     */
    public function getXPSearchMaxMoveDowns()
    {
      return $this->XPSearchMaxMoveDowns;
    }

    /**
     * @param int $XPSearchMaxMoveDowns
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setXPSearchMaxMoveDowns($XPSearchMaxMoveDowns)
    {
      $this->XPSearchMaxMoveDowns = $XPSearchMaxMoveDowns;
      return $this;
    }

    /**
     * @return XPSearchModeEnum
     */
    public function getXPSearchMode()
    {
      return $this->XPSearchMode;
    }

    /**
     * @param XPSearchModeEnum $XPSearchMode
     * @return \App\models\ATSFlight\QueryActionData
     */
    public function setXPSearchMode($XPSearchMode)
    {
      $this->XPSearchMode = $XPSearchMode;
      return $this;
    }

}
