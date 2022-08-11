<?php

namespace App\models\ATSFlight;

class ResponsePassengerPrices
{

    /**
     * @var SharedPrice $AgencyBuy
     */
    protected $AgencyBuy = null;

    /**
     * @var SharedPrice $AgencySell
     */
    protected $AgencySell = null;

    /**
     * @var SharedPrice $AirlineSell
     */
    protected $AirlineSell = null;

    /**
     * @var SharedPrice $BrokerBuy
     */
    protected $BrokerBuy = null;

    /**
     * @var SharedPrice $BrokerSell
     */
    protected $BrokerSell = null;

    /**
     * @var CalculationResponseData $CalcInfo
     */
    protected $CalcInfo = null;

    /**
     * @var string $CalculationGroup
     */
    protected $CalculationGroup = null;

    /**
     * @var string $CalculationRule
     */
    protected $CalculationRule = null;

    /**
     * @var ArrayOfTaxDetail $DetailedTaxes
     */
    protected $DetailedTaxes = null;

    /**
     * @var SharedPrice $EndconsumerBuy
     */
    protected $EndconsumerBuy = null;

    /**
     * @var SharedPrice $EquivalentAgencyBuy
     */
    protected $EquivalentAgencyBuy = null;

    /**
     * @var SharedPrice $EquivalentAgencySell
     */
    protected $EquivalentAgencySell = null;

    /**
     * @var SharedPrice $EquivalentAirlineSell
     */
    protected $EquivalentAirlineSell = null;

    /**
     * @var SharedPrice $EquivalentBrokerBuy
     */
    protected $EquivalentBrokerBuy = null;

    /**
     * @var SharedPrice $EquivalentBrokerSell
     */
    protected $EquivalentBrokerSell = null;

    /**
     * @var SharedPrice $EquivalentEndconsumerBuy
     */
    protected $EquivalentEndconsumerBuy = null;

    /**
     * @var SharedPrice $EquivalentQSurcharge
     */
    protected $EquivalentQSurcharge = null;

    /**
     * @var SharedPrice $EquivalentServiceFee
     */
    protected $EquivalentServiceFee = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

    /**
     * @var boolean $HasServiceFee
     */
    protected $HasServiceFee = null;

    /**
     * @var ArrayOfResponsePassengerPrices $HistoricPrices
     */
    protected $HistoricPrices = null;

    /**
     * @var SharedPrice $QSurcharge
     */
    protected $QSurcharge = null;

    /**
     * @var boolean $QSurchargeIncludedInNetFare
     */
    protected $QSurchargeIncludedInNetFare = null;

    /**
     * @var SharedPrice $ServiceFee
     */
    protected $ServiceFee = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getAgencyBuy()
    {
      return $this->AgencyBuy;
    }

    /**
     * @param SharedPrice $AgencyBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setAgencyBuy($AgencyBuy)
    {
      $this->AgencyBuy = $AgencyBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getAgencySell()
    {
      return $this->AgencySell;
    }

    /**
     * @param SharedPrice $AgencySell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setAgencySell($AgencySell)
    {
      $this->AgencySell = $AgencySell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getAirlineSell()
    {
      return $this->AirlineSell;
    }

    /**
     * @param SharedPrice $AirlineSell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setAirlineSell($AirlineSell)
    {
      $this->AirlineSell = $AirlineSell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getBrokerBuy()
    {
      return $this->BrokerBuy;
    }

    /**
     * @param SharedPrice $BrokerBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setBrokerBuy($BrokerBuy)
    {
      $this->BrokerBuy = $BrokerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getBrokerSell()
    {
      return $this->BrokerSell;
    }

    /**
     * @param SharedPrice $BrokerSell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setBrokerSell($BrokerSell)
    {
      $this->BrokerSell = $BrokerSell;
      return $this;
    }

    /**
     * @return CalculationResponseData
     */
    public function getCalcInfo()
    {
      return $this->CalcInfo;
    }

    /**
     * @param CalculationResponseData $CalcInfo
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setCalcInfo($CalcInfo)
    {
      $this->CalcInfo = $CalcInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalculationGroup()
    {
      return $this->CalculationGroup;
    }

    /**
     * @param string $CalculationGroup
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setCalculationGroup($CalculationGroup)
    {
      $this->CalculationGroup = $CalculationGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalculationRule()
    {
      return $this->CalculationRule;
    }

    /**
     * @param string $CalculationRule
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setCalculationRule($CalculationRule)
    {
      $this->CalculationRule = $CalculationRule;
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getDetailedTaxes()
    {
      return $this->DetailedTaxes;
    }

    /**
     * @param ArrayOfTaxDetail $DetailedTaxes
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setDetailedTaxes($DetailedTaxes)
    {
      $this->DetailedTaxes = $DetailedTaxes;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEndconsumerBuy()
    {
      return $this->EndconsumerBuy;
    }

    /**
     * @param SharedPrice $EndconsumerBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEndconsumerBuy($EndconsumerBuy)
    {
      $this->EndconsumerBuy = $EndconsumerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAgencyBuy()
    {
      return $this->EquivalentAgencyBuy;
    }

    /**
     * @param SharedPrice $EquivalentAgencyBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentAgencyBuy($EquivalentAgencyBuy)
    {
      $this->EquivalentAgencyBuy = $EquivalentAgencyBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAgencySell()
    {
      return $this->EquivalentAgencySell;
    }

    /**
     * @param SharedPrice $EquivalentAgencySell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentAgencySell($EquivalentAgencySell)
    {
      $this->EquivalentAgencySell = $EquivalentAgencySell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAirlineSell()
    {
      return $this->EquivalentAirlineSell;
    }

    /**
     * @param SharedPrice $EquivalentAirlineSell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentAirlineSell($EquivalentAirlineSell)
    {
      $this->EquivalentAirlineSell = $EquivalentAirlineSell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBrokerBuy()
    {
      return $this->EquivalentBrokerBuy;
    }

    /**
     * @param SharedPrice $EquivalentBrokerBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentBrokerBuy($EquivalentBrokerBuy)
    {
      $this->EquivalentBrokerBuy = $EquivalentBrokerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBrokerSell()
    {
      return $this->EquivalentBrokerSell;
    }

    /**
     * @param SharedPrice $EquivalentBrokerSell
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentBrokerSell($EquivalentBrokerSell)
    {
      $this->EquivalentBrokerSell = $EquivalentBrokerSell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentEndconsumerBuy()
    {
      return $this->EquivalentEndconsumerBuy;
    }

    /**
     * @param SharedPrice $EquivalentEndconsumerBuy
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentEndconsumerBuy($EquivalentEndconsumerBuy)
    {
      $this->EquivalentEndconsumerBuy = $EquivalentEndconsumerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentQSurcharge()
    {
      return $this->EquivalentQSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentQSurcharge
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentQSurcharge($EquivalentQSurcharge)
    {
      $this->EquivalentQSurcharge = $EquivalentQSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentServiceFee()
    {
      return $this->EquivalentServiceFee;
    }

    /**
     * @param SharedPrice $EquivalentServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentServiceFee($EquivalentServiceFee)
    {
      $this->EquivalentServiceFee = $EquivalentServiceFee;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasServiceFee()
    {
      return $this->HasServiceFee;
    }

    /**
     * @param boolean $HasServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setHasServiceFee($HasServiceFee)
    {
      $this->HasServiceFee = $HasServiceFee;
      return $this;
    }

    /**
     * @return ArrayOfResponsePassengerPrices
     */
    public function getHistoricPrices()
    {
      return $this->HistoricPrices;
    }

    /**
     * @param ArrayOfResponsePassengerPrices $HistoricPrices
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setHistoricPrices($HistoricPrices)
    {
      $this->HistoricPrices = $HistoricPrices;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getQSurcharge()
    {
      return $this->QSurcharge;
    }

    /**
     * @param SharedPrice $QSurcharge
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setQSurcharge($QSurcharge)
    {
      $this->QSurcharge = $QSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQSurchargeIncludedInNetFare()
    {
      return $this->QSurchargeIncludedInNetFare;
    }

    /**
     * @param boolean $QSurchargeIncludedInNetFare
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setQSurchargeIncludedInNetFare($QSurchargeIncludedInNetFare)
    {
      $this->QSurchargeIncludedInNetFare = $QSurchargeIncludedInNetFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getServiceFee()
    {
      return $this->ServiceFee;
    }

    /**
     * @param SharedPrice $ServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setServiceFee($ServiceFee)
    {
      $this->ServiceFee = $ServiceFee;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\ResponsePassengerPrices
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
