<?php

namespace App\models\ATSFlight;

class Response
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfstring $PaymentTokens
     */
    protected $PaymentTokens = null;

    /**
     * @var WebResponseDetails $ResponseDetails
     */
    protected $ResponseDetails = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $WebResponse
     */
    protected $WebResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \App\models\ATSFlight\Response
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPaymentTokens()
    {
      return $this->PaymentTokens;
    }

    /**
     * @param ArrayOfstring $PaymentTokens
     * @return \App\models\ATSFlight\Response
     */
    public function setPaymentTokens($PaymentTokens)
    {
      $this->PaymentTokens = $PaymentTokens;
      return $this;
    }

    /**
     * @return WebResponseDetails
     */
    public function getResponseDetails()
    {
      return $this->ResponseDetails;
    }

    /**
     * @param WebResponseDetails $ResponseDetails
     * @return \App\models\ATSFlight\Response
     */
    public function setResponseDetails($ResponseDetails)
    {
      $this->ResponseDetails = $ResponseDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\Response
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebResponse()
    {
      return $this->WebResponse;
    }

    /**
     * @param string $WebResponse
     * @return \App\models\ATSFlight\Response
     */
    public function setWebResponse($WebResponse)
    {
      $this->WebResponse = $WebResponse;
      return $this;
    }

}
