<?php

namespace App\models\ATSFlight;

class ModifyResponsePassenger
{

    /**
     * @var ArrayOfModifyResponseAPIS $APIS
     */
    protected $APIS = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var ArrayOfModifyResponseFF $FrequentFlyer
     */
    protected $FrequentFlyer = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfModifyResponseOSI $OSI
     */
    protected $OSI = null;

    /**
     * @var ArrayOfModifyResponseSSR $SSR
     */
    protected $SSR = null;

    /**
     * @var ArrayOfModifyResponseSeats $Seats
     */
    protected $Seats = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfModifyResponseAPIS
     */
    public function getAPIS()
    {
      return $this->APIS;
    }

    /**
     * @param ArrayOfModifyResponseAPIS $APIS
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setAPIS($APIS)
    {
      $this->APIS = $APIS;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseFF
     */
    public function getFrequentFlyer()
    {
      return $this->FrequentFlyer;
    }

    /**
     * @param ArrayOfModifyResponseFF $FrequentFlyer
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setFrequentFlyer($FrequentFlyer)
    {
      $this->FrequentFlyer = $FrequentFlyer;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseOSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param ArrayOfModifyResponseOSI $OSI
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseSSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param ArrayOfModifyResponseSSR $SSR
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseSeats
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfModifyResponseSeats $Seats
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponsePassenger
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
