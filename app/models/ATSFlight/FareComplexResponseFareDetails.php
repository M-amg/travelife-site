<?php

namespace App\models\ATSFlight;

class FareComplexResponseFareDetails
{

    /**
     * @var ArrayOfBoardingResponseDetail $BoardingDetails
     */
    protected $BoardingDetails = null;

    /**
     * @var CRSProfileData $BookingCRS
     */
    protected $BookingCRS = null;

    /**
     * @var CacheInfoData $CacheInfo
     */
    protected $CacheInfo = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var RuleModificationInfo $ModificationInfo
     */
    protected $ModificationInfo = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfDetailedPaymentMethod $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var string $PercentageDBCode
     */
    protected $PercentageDBCode = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var TotalPrice $PriceDetails
     */
    protected $PriceDetails = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var CRS $UsedCRSProfile
     */
    protected $UsedCRSProfile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfBoardingResponseDetail
     */
    public function getBoardingDetails()
    {
      return $this->BoardingDetails;
    }

    /**
     * @param ArrayOfBoardingResponseDetail $BoardingDetails
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setBoardingDetails($BoardingDetails)
    {
      $this->BoardingDetails = $BoardingDetails;
      return $this;
    }

    /**
     * @return CRSProfileData
     */
    public function getBookingCRS()
    {
      return $this->BookingCRS;
    }

    /**
     * @param CRSProfileData $BookingCRS
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setBookingCRS($BookingCRS)
    {
      $this->BookingCRS = $BookingCRS;
      return $this;
    }

    /**
     * @return CacheInfoData
     */
    public function getCacheInfo()
    {
      return $this->CacheInfo;
    }

    /**
     * @param CacheInfoData $CacheInfo
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setCacheInfo($CacheInfo)
    {
      $this->CacheInfo = $CacheInfo;
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
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return RuleModificationInfo
     */
    public function getModificationInfo()
    {
      return $this->ModificationInfo;
    }

    /**
     * @param RuleModificationInfo $ModificationInfo
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setModificationInfo($ModificationInfo)
    {
      $this->ModificationInfo = $ModificationInfo;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfDetailedPaymentMethod
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param ArrayOfDetailedPaymentMethod $PaymentMethods
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return string
     */
    public function getPercentageDBCode()
    {
      return $this->PercentageDBCode;
    }

    /**
     * @param string $PercentageDBCode
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setPercentageDBCode($PercentageDBCode)
    {
      $this->PercentageDBCode = $PercentageDBCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param string $PlatingCarrier
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return TotalPrice
     */
    public function getPriceDetails()
    {
      return $this->PriceDetails;
    }

    /**
     * @param TotalPrice $PriceDetails
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setPriceDetails($PriceDetails)
    {
      $this->PriceDetails = $PriceDetails;
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
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return CRS
     */
    public function getUsedCRSProfile()
    {
      return $this->UsedCRSProfile;
    }

    /**
     * @param CRS $UsedCRSProfile
     * @return \App\models\ATSFlight\FareComplexResponseFareDetails
     */
    public function setUsedCRSProfile($UsedCRSProfile)
    {
      $this->UsedCRSProfile = $UsedCRSProfile;
      return $this;
    }

}
