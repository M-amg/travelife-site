<?php

namespace App\models\ATSFlight;

class RequestConfigurationData
{

    /**
     * @var RequestCRSConfigData $CRSConfigData
     */
    protected $CRSConfigData = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var DiscountEnum $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var int $TimeOutInSeconds
     */
    protected $TimeOutInSeconds = null;

    /**
     * @var Vayant $VayantConfig
     */
    protected $VayantConfig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestCRSConfigData
     */
    public function getCRSConfigData()
    {
      return $this->CRSConfigData;
    }

    /**
     * @param RequestCRSConfigData $CRSConfigData
     * @return \App\models\ATSFlight\RequestConfigurationData
     */
    public function setCRSConfigData($CRSConfigData)
    {
      $this->CRSConfigData = $CRSConfigData;
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
     * @return \App\models\ATSFlight\RequestConfigurationData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \App\models\ATSFlight\RequestConfigurationData
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
     * @return DiscountEnum
     */
    public function getSpecialDiscounts()
    {
      return $this->SpecialDiscounts;
    }

    /**
     * @param DiscountEnum $SpecialDiscounts
     * @return \App\models\ATSFlight\RequestConfigurationData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeOutInSeconds()
    {
      return $this->TimeOutInSeconds;
    }

    /**
     * @param int $TimeOutInSeconds
     * @return \App\models\ATSFlight\RequestConfigurationData
     */
    public function setTimeOutInSeconds($TimeOutInSeconds)
    {
      $this->TimeOutInSeconds = $TimeOutInSeconds;
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
     * @return \App\models\ATSFlight\RequestConfigurationData
     */
    public function setVayantConfig($VayantConfig)
    {
      $this->VayantConfig = $VayantConfig;
      return $this;
    }

}
