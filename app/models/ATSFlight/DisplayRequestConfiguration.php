<?php

namespace App\models\ATSFlight;

class DisplayRequestConfiguration
{

    /**
     * @var AdditionalDetailEnum $AdditionalDetails
     */
    protected $AdditionalDetails = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var CRSData $CRSSetting
     */
    protected $CRSSetting = null;

    /**
     * @var CalculationData $Calculation
     */
    protected $Calculation = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var ArrayOfDatabaseCode $DBCodes
     */
    protected $DBCodes = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var string $MultiChannelBranch
     */
    protected $MultiChannelBranch = null;

    /**
     * @var string $MultiChannelBranchGroup
     */
    protected $MultiChannelBranchGroup = null;

    /**
     * @var ArrayOfPaymentFilter $PaymentFilters
     */
    protected $PaymentFilters = null;

    /**
     * @var FareTypeEnum $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var boolean $ReturnDirectFlightsOnly
     */
    protected $ReturnDirectFlightsOnly = null;

    /**
     * @var SortEnum $SortBy
     */
    protected $SortBy = null;

    /**
     * @var Vayant $VayantConfig
     */
    protected $VayantConfig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalDetailEnum
     */
    public function getAdditionalDetails()
    {
      return $this->AdditionalDetails;
    }

    /**
     * @param AdditionalDetailEnum $AdditionalDetails
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setAdditionalDetails($AdditionalDetails)
    {
      $this->AdditionalDetails = $AdditionalDetails;
      return $this;
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return CRSData
     */
    public function getCRSSetting()
    {
      return $this->CRSSetting;
    }

    /**
     * @param CRSData $CRSSetting
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setCRSSetting($CRSSetting)
    {
      $this->CRSSetting = $CRSSetting;
      return $this;
    }

    /**
     * @return CalculationData
     */
    public function getCalculation()
    {
      return $this->Calculation;
    }

    /**
     * @param CalculationData $Calculation
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setCalculation($Calculation)
    {
      $this->Calculation = $Calculation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return ArrayOfDatabaseCode
     */
    public function getDBCodes()
    {
      return $this->DBCodes;
    }

    /**
     * @param ArrayOfDatabaseCode $DBCodes
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setDBCodes($DBCodes)
    {
      $this->DBCodes = $DBCodes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestTicketingDate()
    {
      if ($this->EarliestTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestTicketingDate
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setEarliestTicketingDate(\DateTime $EarliestTicketingDate = null)
    {
      if ($EarliestTicketingDate == null) {
       $this->EarliestTicketingDate = null;
      } else {
        $this->EarliestTicketingDate = $EarliestTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranch()
    {
      return $this->MultiChannelBranch;
    }

    /**
     * @param string $MultiChannelBranch
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setMultiChannelBranch($MultiChannelBranch)
    {
      $this->MultiChannelBranch = $MultiChannelBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranchGroup()
    {
      return $this->MultiChannelBranchGroup;
    }

    /**
     * @param string $MultiChannelBranchGroup
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setMultiChannelBranchGroup($MultiChannelBranchGroup)
    {
      $this->MultiChannelBranchGroup = $MultiChannelBranchGroup;
      return $this;
    }

    /**
     * @return ArrayOfPaymentFilter
     */
    public function getPaymentFilters()
    {
      return $this->PaymentFilters;
    }

    /**
     * @param ArrayOfPaymentFilter $PaymentFilters
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setPaymentFilters($PaymentFilters)
    {
      $this->PaymentFilters = $PaymentFilters;
      return $this;
    }

    /**
     * @return FareTypeEnum
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param FareTypeEnum $PaymentInfo
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
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
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setReturnDirectFlightsOnly($ReturnDirectFlightsOnly)
    {
      $this->ReturnDirectFlightsOnly = $ReturnDirectFlightsOnly;
      return $this;
    }

    /**
     * @return SortEnum
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param SortEnum $SortBy
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setSortBy($SortBy)
    {
      $this->SortBy = $SortBy;
      return $this;
    }

    /**
     * @return Vayant
     */
    public function getVayantConfig()
    {
      return $this->VayantConfig;
    }

    /**
     * @param Vayant $VayantConfig
     * @return \App\models\ATSFlight\DisplayRequestConfiguration
     */
    public function setVayantConfig($VayantConfig)
    {
      $this->VayantConfig = $VayantConfig;
      return $this;
    }

}
