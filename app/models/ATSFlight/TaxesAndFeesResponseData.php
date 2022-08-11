<?php

namespace App\models\ATSFlight;

class TaxesAndFeesResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfTaxResponsePassenger $PassengerTaxes
     */
    protected $PassengerTaxes = null;

    /**
     * @var ArrayOfDetailedPaymentMethod $PaymentDetails
     */
    protected $PaymentDetails = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var string $TouroperatorCode
     */
    protected $TouroperatorCode = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfTaxResponsePassenger
     */
    public function getPassengerTaxes()
    {
      return $this->PassengerTaxes;
    }

    /**
     * @param ArrayOfTaxResponsePassenger $PassengerTaxes
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setPassengerTaxes($PassengerTaxes)
    {
      $this->PassengerTaxes = $PassengerTaxes;
      return $this;
    }

    /**
     * @return ArrayOfDetailedPaymentMethod
     */
    public function getPaymentDetails()
    {
      return $this->PaymentDetails;
    }

    /**
     * @param ArrayOfDetailedPaymentMethod $PaymentDetails
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setPaymentDetails($PaymentDetails)
    {
      $this->PaymentDetails = $PaymentDetails;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
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
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getTouroperatorCode()
    {
      return $this->TouroperatorCode;
    }

    /**
     * @param string $TouroperatorCode
     * @return \App\models\ATSFlight\TaxesAndFeesResponseData
     */
    public function setTouroperatorCode($TouroperatorCode)
    {
      $this->TouroperatorCode = $TouroperatorCode;
      return $this;
    }

}
