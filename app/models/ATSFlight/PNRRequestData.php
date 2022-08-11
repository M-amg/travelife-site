<?php

namespace App\models\ATSFlight;

class PNRRequestData
{

    /**
     * @var AllotmentAccount $AllotmentAccountData
     */
    protected $AllotmentAccountData = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var boolean $CalculatePOT
     */
    protected $CalculatePOT = null;

    /**
     * @var PNRRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var BackOfficeTypeEnum $CreateBackOffice
     */
    protected $CreateBackOffice = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var boolean $GetMilages
     */
    protected $GetMilages = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var boolean $IsAllotment
     */
    protected $IsAllotment = null;

    /**
     * @var PNROptionsEnum $OtherOptions
     */
    protected $OtherOptions = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var boolean $ReturnHistoricSegments
     */
    protected $ReturnHistoricSegments = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var boolean $StoredFareDetails
     */
    protected $StoredFareDetails = null;

    /**
     * @var boolean $StructuredPNR
     */
    protected $StructuredPNR = null;

    /**
     * @var boolean $TicketDetails
     */
    protected $TicketDetails = null;

    /**
     * @var PNRRequestWeb $Web
     */
    protected $Web = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAllotmentAccountData()
    {
      return $this->AllotmentAccountData;
    }

    /**
     * @param AllotmentAccount $AllotmentAccountData
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setAllotmentAccountData($AllotmentAccountData)
    {
      $this->AllotmentAccountData = $AllotmentAccountData;
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
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCalculatePOT()
    {
      return $this->CalculatePOT;
    }

    /**
     * @param boolean $CalculatePOT
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setCalculatePOT($CalculatePOT)
    {
      $this->CalculatePOT = $CalculatePOT;
      return $this;
    }

    /**
     * @return PNRRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param PNRRequestCharter $Charter
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return BackOfficeTypeEnum
     */
    public function getCreateBackOffice()
    {
      return $this->CreateBackOffice;
    }

    /**
     * @param BackOfficeTypeEnum $CreateBackOffice
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setCreateBackOffice($CreateBackOffice)
    {
      $this->CreateBackOffice = $CreateBackOffice;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
      return $this->CustomerLastName;
    }

    /**
     * @param string $CustomerLastName
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetMilages()
    {
      return $this->GetMilages;
    }

    /**
     * @param boolean $GetMilages
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setGetMilages($GetMilages)
    {
      $this->GetMilages = $GetMilages;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param string $IATANumber
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllotment()
    {
      return $this->IsAllotment;
    }

    /**
     * @param boolean $IsAllotment
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setIsAllotment($IsAllotment)
    {
      $this->IsAllotment = $IsAllotment;
      return $this;
    }

    /**
     * @return PNROptionsEnum
     */
    public function getOtherOptions()
    {
      return $this->OtherOptions;
    }

    /**
     * @param PNROptionsEnum $OtherOptions
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setOtherOptions($OtherOptions)
    {
      $this->OtherOptions = $OtherOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnHistoricSegments()
    {
      return $this->ReturnHistoricSegments;
    }

    /**
     * @param boolean $ReturnHistoricSegments
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setReturnHistoricSegments($ReturnHistoricSegments)
    {
      $this->ReturnHistoricSegments = $ReturnHistoricSegments;
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
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStoredFareDetails()
    {
      return $this->StoredFareDetails;
    }

    /**
     * @param boolean $StoredFareDetails
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setStoredFareDetails($StoredFareDetails)
    {
      $this->StoredFareDetails = $StoredFareDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStructuredPNR()
    {
      return $this->StructuredPNR;
    }

    /**
     * @param boolean $StructuredPNR
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setStructuredPNR($StructuredPNR)
    {
      $this->StructuredPNR = $StructuredPNR;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketDetails()
    {
      return $this->TicketDetails;
    }

    /**
     * @param boolean $TicketDetails
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setTicketDetails($TicketDetails)
    {
      $this->TicketDetails = $TicketDetails;
      return $this;
    }

    /**
     * @return PNRRequestWeb
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param PNRRequestWeb $Web
     * @return \App\models\ATSFlight\PNRRequestData
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}
