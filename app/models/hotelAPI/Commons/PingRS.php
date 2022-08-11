<?php

namespace App\models\hotelAPI\Commons;

class PingRS
{

    /**
     * @var string $agencyStatus
     */
    protected $agencyStatus = null;

    /**
     * @var string[] $enabledServices
     */
    protected $enabledServices = null;

    /**
     * @var \DateTime $systemDate
     */
    protected $systemDate = null;

    /**
     * @var string $systemStatus
     */
    protected $systemStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgencyStatus()
    {
      return $this->agencyStatus;
    }

    /**
     * @param string $agencyStatus
     * @return \App\models\hotelAPI\Commons\PingRS
     */
    public function setAgencyStatus($agencyStatus)
    {
      $this->agencyStatus = $agencyStatus;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEnabledServices()
    {
      return $this->enabledServices;
    }

    /**
     * @param string[] $enabledServices
     * @return \App\models\hotelAPI\Commons\PingRS
     */
    public function setEnabledServices(array $enabledServices = null)
    {
      $this->enabledServices = $enabledServices;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSystemDate()
    {
      if ($this->systemDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->systemDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $systemDate
     * @return \App\models\hotelAPI\Commons\PingRS
     */
    public function setSystemDate(\DateTime $systemDate = null)
    {
      if ($systemDate == null) {
       $this->systemDate = null;
      } else {
        $this->systemDate = $systemDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemStatus()
    {
      return $this->systemStatus;
    }

    /**
     * @param string $systemStatus
     * @return \App\models\hotelAPI\Commons\PingRS
     */
    public function setSystemStatus($systemStatus)
    {
      $this->systemStatus = $systemStatus;
      return $this;
    }

}
