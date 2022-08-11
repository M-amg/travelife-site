<?php

namespace App\models\ATSFlight;

class RequestCharterData
{

    /**
     * @var ArrayOfCharterAccount $Accounts
     */
    protected $Accounts = null;

    /**
     * @var string $CharterLanguageCode
     */
    protected $CharterLanguageCode = null;

    /**
     * @var int $ConcurrentAvailabilities
     */
    protected $ConcurrentAvailabilities = null;

    /**
     * @var int $MaximumAvailabilities
     */
    protected $MaximumAvailabilities = null;

    /**
     * @var int $NumberOfAvailableFares
     */
    protected $NumberOfAvailableFares = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var ArrayOfTouroperator $Touroperators
     */
    protected $Touroperators = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCharterAccount
     */
    public function getAccounts()
    {
      return $this->Accounts;
    }

    /**
     * @param ArrayOfCharterAccount $Accounts
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setAccounts($Accounts)
    {
      $this->Accounts = $Accounts;
      return $this;
    }

    /**
     * @return string
     */
    public function getCharterLanguageCode()
    {
      return $this->CharterLanguageCode;
    }

    /**
     * @param string $CharterLanguageCode
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setCharterLanguageCode($CharterLanguageCode)
    {
      $this->CharterLanguageCode = $CharterLanguageCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getConcurrentAvailabilities()
    {
      return $this->ConcurrentAvailabilities;
    }

    /**
     * @param int $ConcurrentAvailabilities
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setConcurrentAvailabilities($ConcurrentAvailabilities)
    {
      $this->ConcurrentAvailabilities = $ConcurrentAvailabilities;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumAvailabilities()
    {
      return $this->MaximumAvailabilities;
    }

    /**
     * @param int $MaximumAvailabilities
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setMaximumAvailabilities($MaximumAvailabilities)
    {
      $this->MaximumAvailabilities = $MaximumAvailabilities;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAvailableFares()
    {
      return $this->NumberOfAvailableFares;
    }

    /**
     * @param int $NumberOfAvailableFares
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setNumberOfAvailableFares($NumberOfAvailableFares)
    {
      $this->NumberOfAvailableFares = $NumberOfAvailableFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return ArrayOfTouroperator
     */
    public function getTouroperators()
    {
      return $this->Touroperators;
    }

    /**
     * @param ArrayOfTouroperator $Touroperators
     * @return \App\models\ATSFlight\RequestCharterData
     */
    public function setTouroperators($Touroperators)
    {
      $this->Touroperators = $Touroperators;
      return $this;
    }

}
