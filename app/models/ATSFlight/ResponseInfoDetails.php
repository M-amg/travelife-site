<?php

namespace App\models\ATSFlight;

class ResponseInfoDetails
{

    /**
     * @var string $APIVersion
     */
    protected $APIVersion = null;

    /**
     * @var ArrayOfRaisedException $Exceptions
     */
    protected $Exceptions = null;

    /**
     * @var int $ListenPort
     */
    protected $ListenPort = null;

    /**
     * @var string $MachineName
     */
    protected $MachineName = null;

    /**
     * @var \DateTime $ResponseDateTime
     */
    protected $ResponseDateTime = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAPIVersion()
    {
      return $this->APIVersion;
    }

    /**
     * @param string $APIVersion
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setAPIVersion($APIVersion)
    {
      $this->APIVersion = $APIVersion;
      return $this;
    }

    /**
     * @return ArrayOfRaisedException
     */
    public function getExceptions()
    {
      return $this->Exceptions;
    }

    /**
     * @param ArrayOfRaisedException $Exceptions
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setExceptions($Exceptions)
    {
      $this->Exceptions = $Exceptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getListenPort()
    {
      return $this->ListenPort;
    }

    /**
     * @param int $ListenPort
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setListenPort($ListenPort)
    {
      $this->ListenPort = $ListenPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getMachineName()
    {
      return $this->MachineName;
    }

    /**
     * @param string $MachineName
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setMachineName($MachineName)
    {
      $this->MachineName = $MachineName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getResponseDateTime()
    {
      if ($this->ResponseDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ResponseDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ResponseDateTime
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setResponseDateTime(\DateTime $ResponseDateTime = null)
    {
      if ($ResponseDateTime == null) {
       $this->ResponseDateTime = null;
      } else {
        $this->ResponseDateTime = $ResponseDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \App\models\ATSFlight\ResponseInfoDetails
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

}
