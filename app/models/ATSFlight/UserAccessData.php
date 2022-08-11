<?php

namespace App\models\ATSFlight;

class UserAccessData
{

    /**
     * @var ArrayOfstring $APIVersions
     */
    protected $APIVersions = null;

    /**
     * @var ArrayOfstring $AdminEMailAddresses
     */
    protected $AdminEMailAddresses = null;

    /**
     * @var AllotmentAccount $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var boolean $AllowFullToleranceSearch
     */
    protected $AllowFullToleranceSearch = null;

    /**
     * @var string $AllowedIpAddresses
     */
    protected $AllowedIpAddresses = null;

    /**
     * @var NFQEEnum $AllowedNFQE
     */
    protected $AllowedNFQE = null;

    /**
     * @var ArrayOfstring $AllowedNativeCommands
     */
    protected $AllowedNativeCommands = null;

    /**
     * @var ArrayOfUserPccData $AllowedPCCList
     */
    protected $AllowedPCCList = null;

    /**
     * @var ArrayOfCacheDurationDefinition $CacheDurations
     */
    protected $CacheDurations = null;

    /**
     * @var UserCalculationData $CalculationSettings
     */
    protected $CalculationSettings = null;

    /**
     * @var CharterFaresSettings $Charter
     */
    protected $Charter = null;

    /**
     * @var CommandEnum $Commands
     */
    protected $Commands = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $CryptPassword
     */
    protected $CryptPassword = null;

    /**
     * @var string $CryptSaltValue
     */
    protected $CryptSaltValue = null;

    /**
     * @var duration $DefaultAlarmTimeout
     */
    protected $DefaultAlarmTimeout = null;

    /**
     * @var string $DefaultLanguageCode
     */
    protected $DefaultLanguageCode = null;

    /**
     * @var int $DefaultPercentageCalcGroup
     */
    protected $DefaultPercentageCalcGroup = null;

    /**
     * @var boolean $DisableRuleEngine
     */
    protected $DisableRuleEngine = null;

    /**
     * @var boolean $DisbaleTaxOverride
     */
    protected $DisbaleTaxOverride = null;

    /**
     * @var boolean $EnableWaitScreen
     */
    protected $EnableWaitScreen = null;

    /**
     * @var FareTypeEnum $EnabledCacheFareType
     */
    protected $EnabledCacheFareType = null;

    /**
     * @var EnhancedFeederSearchSetting $EnhancedFeederSearch
     */
    protected $EnhancedFeederSearch = null;

    /**
     * @var \DateTime $ExpiryDate
     */
    protected $ExpiryDate = null;

    /**
     * @var GDSEnum $GDS
     */
    protected $GDS = null;

    /**
     * @var GDSCodeEnum $GDSCodes
     */
    protected $GDSCodes = null;

    /**
     * @var GDSServerSettings $GDSServer
     */
    protected $GDSServer = null;

    /**
     * @var GDSEnum $GDSTitle
     */
    protected $GDSTitle = null;

    /**
     * @var GetFareRestrictionData $GetFareRestrictions
     */
    protected $GetFareRestrictions = null;

    /**
     * @var int $IBEPort
     */
    protected $IBEPort = null;

    /**
     * @var string $IBEServer
     */
    protected $IBEServer = null;

    /**
     * @var string $InternalSufix
     */
    protected $InternalSufix = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsAdmin
     */
    protected $IsAdmin = null;

    /**
     * @var boolean $IsAlomaRefillAllowed
     */
    protected $IsAlomaRefillAllowed = null;

    /**
     * @var boolean $IsEncrypt
     */
    protected $IsEncrypt = null;

    /**
     * @var boolean $IsInternalUser
     */
    protected $IsInternalUser = null;

    /**
     * @var boolean $IsTestUser
     */
    protected $IsTestUser = null;

    /**
     * @var int $MaxConcurrentCalls
     */
    protected $MaxConcurrentCalls = null;

    /**
     * @var int $MaxPercentageOpenJawDistance
     */
    protected $MaxPercentageOpenJawDistance = null;

    /**
     * @var int $MaxRuleActions
     */
    protected $MaxRuleActions = null;

    /**
     * @var int $MinimumStopDuration
     */
    protected $MinimumStopDuration = null;

    /**
     * @var \DateTime $ModifyDate
     */
    protected $ModifyDate = null;

    /**
     * @var ArrayOfUserPCCQueue $PCCQueues
     */
    protected $PCCQueues = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfInternalPaymentDetail $PaymentDefaults
     */
    protected $PaymentDefaults = null;

    /**
     * @var string $PercentagQuoteBeforBookingDB
     */
    protected $PercentagQuoteBeforBookingDB = null;

    /**
     * @var int $PercentageOverrideOption
     */
    protected $PercentageOverrideOption = null;

    /**
     * @var PreferenceSettings $PreferenceSearch
     */
    protected $PreferenceSearch = null;

    /**
     * @var ArrayOfanyType $Supplier
     */
    protected $Supplier = null;

    /**
     * @var ArrayOfstring $TestRemark
     */
    protected $TestRemark = null;

    /**
     * @var TraceLevelEnum $TraceLevel
     */
    protected $TraceLevel = null;

    /**
     * @var boolean $UseTokenisedBooking
     */
    protected $UseTokenisedBooking = null;

    /**
     * @var string $UserGuid
     */
    protected $UserGuid = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var ArrayOfAgent $WebAgents
     */
    protected $WebAgents = null;

    /**
     * @var WebFaresSettings $WebFare
     */
    protected $WebFare = null;

    /**
     * @var boolean $WriteOwnUserLog
     */
    protected $WriteOwnUserLog = null;

    /**
     * @var XtremePricerSettings $XtremePricer
     */
    protected $XtremePricer = null;

    /**
     * @var ExtenalCounting $externalCount
     */
    protected $externalCount = null;

    /**
     * @var ArrayOfCommandIPData $lCommandIP
     */
    protected $lCommandIP = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getAPIVersions()
    {
      return $this->APIVersions;
    }

    /**
     * @param ArrayOfstring $APIVersions
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAPIVersions($APIVersions)
    {
      $this->APIVersions = $APIVersions;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAdminEMailAddresses()
    {
      return $this->AdminEMailAddresses;
    }

    /**
     * @param ArrayOfstring $AdminEMailAddresses
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAdminEMailAddresses($AdminEMailAddresses)
    {
      $this->AdminEMailAddresses = $AdminEMailAddresses;
      return $this;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAllotmentConfig()
    {
      return $this->AllotmentConfig;
    }

    /**
     * @param AllotmentAccount $AllotmentConfig
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllotmentConfig($AllotmentConfig)
    {
      $this->AllotmentConfig = $AllotmentConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowFullToleranceSearch()
    {
      return $this->AllowFullToleranceSearch;
    }

    /**
     * @param boolean $AllowFullToleranceSearch
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllowFullToleranceSearch($AllowFullToleranceSearch)
    {
      $this->AllowFullToleranceSearch = $AllowFullToleranceSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowedIpAddresses()
    {
      return $this->AllowedIpAddresses;
    }

    /**
     * @param string $AllowedIpAddresses
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllowedIpAddresses($AllowedIpAddresses)
    {
      $this->AllowedIpAddresses = $AllowedIpAddresses;
      return $this;
    }

    /**
     * @return NFQEEnum
     */
    public function getAllowedNFQE()
    {
      return $this->AllowedNFQE;
    }

    /**
     * @param NFQEEnum $AllowedNFQE
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllowedNFQE($AllowedNFQE)
    {
      $this->AllowedNFQE = $AllowedNFQE;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAllowedNativeCommands()
    {
      return $this->AllowedNativeCommands;
    }

    /**
     * @param ArrayOfstring $AllowedNativeCommands
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllowedNativeCommands($AllowedNativeCommands)
    {
      $this->AllowedNativeCommands = $AllowedNativeCommands;
      return $this;
    }

    /**
     * @return ArrayOfUserPccData
     */
    public function getAllowedPCCList()
    {
      return $this->AllowedPCCList;
    }

    /**
     * @param ArrayOfUserPccData $AllowedPCCList
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setAllowedPCCList($AllowedPCCList)
    {
      $this->AllowedPCCList = $AllowedPCCList;
      return $this;
    }

    /**
     * @return ArrayOfCacheDurationDefinition
     */
    public function getCacheDurations()
    {
      return $this->CacheDurations;
    }

    /**
     * @param ArrayOfCacheDurationDefinition $CacheDurations
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCacheDurations($CacheDurations)
    {
      $this->CacheDurations = $CacheDurations;
      return $this;
    }

    /**
     * @return UserCalculationData
     */
    public function getCalculationSettings()
    {
      return $this->CalculationSettings;
    }

    /**
     * @param UserCalculationData $CalculationSettings
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCalculationSettings($CalculationSettings)
    {
      $this->CalculationSettings = $CalculationSettings;
      return $this;
    }

    /**
     * @return CharterFaresSettings
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param CharterFaresSettings $Charter
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return CommandEnum
     */
    public function getCommands()
    {
      return $this->Commands;
    }

    /**
     * @param CommandEnum $Commands
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCommands($Commands)
    {
      $this->Commands = $Commands;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCreationDate(\DateTime $CreationDate = null)
    {
      if ($CreationDate == null) {
       $this->CreationDate = null;
      } else {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCryptPassword()
    {
      return $this->CryptPassword;
    }

    /**
     * @param string $CryptPassword
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCryptPassword($CryptPassword)
    {
      $this->CryptPassword = $CryptPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getCryptSaltValue()
    {
      return $this->CryptSaltValue;
    }

    /**
     * @param string $CryptSaltValue
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setCryptSaltValue($CryptSaltValue)
    {
      $this->CryptSaltValue = $CryptSaltValue;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDefaultAlarmTimeout()
    {
      return $this->DefaultAlarmTimeout;
    }

    /**
     * @param duration $DefaultAlarmTimeout
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setDefaultAlarmTimeout($DefaultAlarmTimeout)
    {
      $this->DefaultAlarmTimeout = $DefaultAlarmTimeout;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLanguageCode()
    {
      return $this->DefaultLanguageCode;
    }

    /**
     * @param string $DefaultLanguageCode
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setDefaultLanguageCode($DefaultLanguageCode)
    {
      $this->DefaultLanguageCode = $DefaultLanguageCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultPercentageCalcGroup()
    {
      return $this->DefaultPercentageCalcGroup;
    }

    /**
     * @param int $DefaultPercentageCalcGroup
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setDefaultPercentageCalcGroup($DefaultPercentageCalcGroup)
    {
      $this->DefaultPercentageCalcGroup = $DefaultPercentageCalcGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableRuleEngine()
    {
      return $this->DisableRuleEngine;
    }

    /**
     * @param boolean $DisableRuleEngine
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setDisableRuleEngine($DisableRuleEngine)
    {
      $this->DisableRuleEngine = $DisableRuleEngine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisbaleTaxOverride()
    {
      return $this->DisbaleTaxOverride;
    }

    /**
     * @param boolean $DisbaleTaxOverride
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setDisbaleTaxOverride($DisbaleTaxOverride)
    {
      $this->DisbaleTaxOverride = $DisbaleTaxOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableWaitScreen()
    {
      return $this->EnableWaitScreen;
    }

    /**
     * @param boolean $EnableWaitScreen
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setEnableWaitScreen($EnableWaitScreen)
    {
      $this->EnableWaitScreen = $EnableWaitScreen;
      return $this;
    }

    /**
     * @return FareTypeEnum
     */
    public function getEnabledCacheFareType()
    {
      return $this->EnabledCacheFareType;
    }

    /**
     * @param FareTypeEnum $EnabledCacheFareType
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setEnabledCacheFareType($EnabledCacheFareType)
    {
      $this->EnabledCacheFareType = $EnabledCacheFareType;
      return $this;
    }

    /**
     * @return EnhancedFeederSearchSetting
     */
    public function getEnhancedFeederSearch()
    {
      return $this->EnhancedFeederSearch;
    }

    /**
     * @param EnhancedFeederSearchSetting $EnhancedFeederSearch
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setEnhancedFeederSearch($EnhancedFeederSearch)
    {
      $this->EnhancedFeederSearch = $EnhancedFeederSearch;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
      if ($this->ExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpiryDate
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setExpiryDate(\DateTime $ExpiryDate = null)
    {
      if ($ExpiryDate == null) {
       $this->ExpiryDate = null;
      } else {
        $this->ExpiryDate = $ExpiryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return GDSEnum
     */
    public function getGDS()
    {
      return $this->GDS;
    }

    /**
     * @param GDSEnum $GDS
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setGDS($GDS)
    {
      $this->GDS = $GDS;
      return $this;
    }

    /**
     * @return GDSCodeEnum
     */
    public function getGDSCodes()
    {
      return $this->GDSCodes;
    }

    /**
     * @param GDSCodeEnum $GDSCodes
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setGDSCodes($GDSCodes)
    {
      $this->GDSCodes = $GDSCodes;
      return $this;
    }

    /**
     * @return GDSServerSettings
     */
    public function getGDSServer()
    {
      return $this->GDSServer;
    }

    /**
     * @param GDSServerSettings $GDSServer
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setGDSServer($GDSServer)
    {
      $this->GDSServer = $GDSServer;
      return $this;
    }

    /**
     * @return GDSEnum
     */
    public function getGDSTitle()
    {
      return $this->GDSTitle;
    }

    /**
     * @param GDSEnum $GDSTitle
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setGDSTitle($GDSTitle)
    {
      $this->GDSTitle = $GDSTitle;
      return $this;
    }

    /**
     * @return GetFareRestrictionData
     */
    public function getGetFareRestrictions()
    {
      return $this->GetFareRestrictions;
    }

    /**
     * @param GetFareRestrictionData $GetFareRestrictions
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setGetFareRestrictions($GetFareRestrictions)
    {
      $this->GetFareRestrictions = $GetFareRestrictions;
      return $this;
    }

    /**
     * @return int
     */
    public function getIBEPort()
    {
      return $this->IBEPort;
    }

    /**
     * @param int $IBEPort
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIBEPort($IBEPort)
    {
      $this->IBEPort = $IBEPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getIBEServer()
    {
      return $this->IBEServer;
    }

    /**
     * @param string $IBEServer
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIBEServer($IBEServer)
    {
      $this->IBEServer = $IBEServer;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalSufix()
    {
      return $this->InternalSufix;
    }

    /**
     * @param string $InternalSufix
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setInternalSufix($InternalSufix)
    {
      $this->InternalSufix = $InternalSufix;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdmin()
    {
      return $this->IsAdmin;
    }

    /**
     * @param boolean $IsAdmin
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsAdmin($IsAdmin)
    {
      $this->IsAdmin = $IsAdmin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAlomaRefillAllowed()
    {
      return $this->IsAlomaRefillAllowed;
    }

    /**
     * @param boolean $IsAlomaRefillAllowed
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsAlomaRefillAllowed($IsAlomaRefillAllowed)
    {
      $this->IsAlomaRefillAllowed = $IsAlomaRefillAllowed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEncrypt()
    {
      return $this->IsEncrypt;
    }

    /**
     * @param boolean $IsEncrypt
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsEncrypt($IsEncrypt)
    {
      $this->IsEncrypt = $IsEncrypt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInternalUser()
    {
      return $this->IsInternalUser;
    }

    /**
     * @param boolean $IsInternalUser
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsInternalUser($IsInternalUser)
    {
      $this->IsInternalUser = $IsInternalUser;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTestUser()
    {
      return $this->IsTestUser;
    }

    /**
     * @param boolean $IsTestUser
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setIsTestUser($IsTestUser)
    {
      $this->IsTestUser = $IsTestUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConcurrentCalls()
    {
      return $this->MaxConcurrentCalls;
    }

    /**
     * @param int $MaxConcurrentCalls
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setMaxConcurrentCalls($MaxConcurrentCalls)
    {
      $this->MaxConcurrentCalls = $MaxConcurrentCalls;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPercentageOpenJawDistance()
    {
      return $this->MaxPercentageOpenJawDistance;
    }

    /**
     * @param int $MaxPercentageOpenJawDistance
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setMaxPercentageOpenJawDistance($MaxPercentageOpenJawDistance)
    {
      $this->MaxPercentageOpenJawDistance = $MaxPercentageOpenJawDistance;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRuleActions()
    {
      return $this->MaxRuleActions;
    }

    /**
     * @param int $MaxRuleActions
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setMaxRuleActions($MaxRuleActions)
    {
      $this->MaxRuleActions = $MaxRuleActions;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumStopDuration()
    {
      return $this->MinimumStopDuration;
    }

    /**
     * @param int $MinimumStopDuration
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setMinimumStopDuration($MinimumStopDuration)
    {
      $this->MinimumStopDuration = $MinimumStopDuration;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifyDate()
    {
      if ($this->ModifyDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifyDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifyDate
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setModifyDate(\DateTime $ModifyDate = null)
    {
      if ($ModifyDate == null) {
       $this->ModifyDate = null;
      } else {
        $this->ModifyDate = $ModifyDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfUserPCCQueue
     */
    public function getPCCQueues()
    {
      return $this->PCCQueues;
    }

    /**
     * @param ArrayOfUserPCCQueue $PCCQueues
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPCCQueues($PCCQueues)
    {
      $this->PCCQueues = $PCCQueues;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfInternalPaymentDetail
     */
    public function getPaymentDefaults()
    {
      return $this->PaymentDefaults;
    }

    /**
     * @param ArrayOfInternalPaymentDetail $PaymentDefaults
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPaymentDefaults($PaymentDefaults)
    {
      $this->PaymentDefaults = $PaymentDefaults;
      return $this;
    }

    /**
     * @return string
     */
    public function getPercentagQuoteBeforBookingDB()
    {
      return $this->PercentagQuoteBeforBookingDB;
    }

    /**
     * @param string $PercentagQuoteBeforBookingDB
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPercentagQuoteBeforBookingDB($PercentagQuoteBeforBookingDB)
    {
      $this->PercentagQuoteBeforBookingDB = $PercentagQuoteBeforBookingDB;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentageOverrideOption()
    {
      return $this->PercentageOverrideOption;
    }

    /**
     * @param int $PercentageOverrideOption
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPercentageOverrideOption($PercentageOverrideOption)
    {
      $this->PercentageOverrideOption = $PercentageOverrideOption;
      return $this;
    }

    /**
     * @return PreferenceSettings
     */
    public function getPreferenceSearch()
    {
      return $this->PreferenceSearch;
    }

    /**
     * @param PreferenceSettings $PreferenceSearch
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setPreferenceSearch($PreferenceSearch)
    {
      $this->PreferenceSearch = $PreferenceSearch;
      return $this;
    }

    /**
     * @return ArrayOfanyType
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param ArrayOfanyType $Supplier
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTestRemark()
    {
      return $this->TestRemark;
    }

    /**
     * @param ArrayOfstring $TestRemark
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setTestRemark($TestRemark)
    {
      $this->TestRemark = $TestRemark;
      return $this;
    }

    /**
     * @return TraceLevelEnum
     */
    public function getTraceLevel()
    {
      return $this->TraceLevel;
    }

    /**
     * @param TraceLevelEnum $TraceLevel
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setTraceLevel($TraceLevel)
    {
      $this->TraceLevel = $TraceLevel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseTokenisedBooking()
    {
      return $this->UseTokenisedBooking;
    }

    /**
     * @param boolean $UseTokenisedBooking
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setUseTokenisedBooking($UseTokenisedBooking)
    {
      $this->UseTokenisedBooking = $UseTokenisedBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserGuid()
    {
      return $this->UserGuid;
    }

    /**
     * @param string $UserGuid
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setUserGuid($UserGuid)
    {
      $this->UserGuid = $UserGuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return ArrayOfAgent
     */
    public function getWebAgents()
    {
      return $this->WebAgents;
    }

    /**
     * @param ArrayOfAgent $WebAgents
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setWebAgents($WebAgents)
    {
      $this->WebAgents = $WebAgents;
      return $this;
    }

    /**
     * @return WebFaresSettings
     */
    public function getWebFare()
    {
      return $this->WebFare;
    }

    /**
     * @param WebFaresSettings $WebFare
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setWebFare($WebFare)
    {
      $this->WebFare = $WebFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWriteOwnUserLog()
    {
      return $this->WriteOwnUserLog;
    }

    /**
     * @param boolean $WriteOwnUserLog
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setWriteOwnUserLog($WriteOwnUserLog)
    {
      $this->WriteOwnUserLog = $WriteOwnUserLog;
      return $this;
    }

    /**
     * @return XtremePricerSettings
     */
    public function getXtremePricer()
    {
      return $this->XtremePricer;
    }

    /**
     * @param XtremePricerSettings $XtremePricer
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setXtremePricer($XtremePricer)
    {
      $this->XtremePricer = $XtremePricer;
      return $this;
    }

    /**
     * @return ExtenalCounting
     */
    public function getExternalCount()
    {
      return $this->externalCount;
    }

    /**
     * @param ExtenalCounting $externalCount
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setExternalCount($externalCount)
    {
      $this->externalCount = $externalCount;
      return $this;
    }

    /**
     * @return ArrayOfCommandIPData
     */
    public function getLCommandIP()
    {
      return $this->lCommandIP;
    }

    /**
     * @param ArrayOfCommandIPData $lCommandIP
     * @return \App\models\ATSFlight\UserAccessData
     */
    public function setLCommandIP($lCommandIP)
    {
      $this->lCommandIP = $lCommandIP;
      return $this;
    }

}
