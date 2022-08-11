<?php

namespace App\models\ATSFlight;

class ResponseFareData
{

    /**
     * @var CRSProfileData $BookingCRS
     */
    protected $BookingCRS = null;

    /**
     * @var BookingOnHoldData $BookingOnHoldInfo
     */
    protected $BookingOnHoldInfo = null;

    /**
     * @var CacheInfoData $CacheInfo
     */
    protected $CacheInfo = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var ResponseFlightData $Flight
     */
    protected $Flight = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var ArrayOfServiceData $IncludedServices
     */
    protected $IncludedServices = null;

    /**
     * @var boolean $IsCached
     */
    protected $IsCached = null;

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
     * @return CRSProfileData
     */
    public function getBookingCRS()
    {
      return $this->BookingCRS;
    }

    /**
     * @param CRSProfileData $BookingCRS
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setBookingCRS($BookingCRS)
    {
      $this->BookingCRS = $BookingCRS;
      return $this;
    }

    /**
     * @return BookingOnHoldData
     */
    public function getBookingOnHoldInfo()
    {
      return $this->BookingOnHoldInfo;
    }

    /**
     * @param BookingOnHoldData $BookingOnHoldInfo
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setBookingOnHoldInfo($BookingOnHoldInfo)
    {
      $this->BookingOnHoldInfo = $BookingOnHoldInfo;
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return ResponseFlightData
     */
    public function getFlight()
    {
      return $this->Flight;
    }

    /**
     * @param ResponseFlightData $Flight
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setFlight($Flight)
    {
      $this->Flight = $Flight;
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
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ArrayOfServiceData
     */
    public function getIncludedServices()
    {
      return $this->IncludedServices;
    }

    /**
     * @param ArrayOfServiceData $IncludedServices
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setIncludedServices($IncludedServices)
    {
      $this->IncludedServices = $IncludedServices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCached()
    {
      return $this->IsCached;
    }

    /**
     * @param boolean $IsCached
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setIsCached($IsCached)
    {
      $this->IsCached = $IsCached;
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
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
     * @return \App\models\ATSFlight\ResponseFareData
     */
    public function setUsedCRSProfile($UsedCRSProfile)
    {
      $this->UsedCRSProfile = $UsedCRSProfile;
      return $this;
    }

}
