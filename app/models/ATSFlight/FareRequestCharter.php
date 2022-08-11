<?php

namespace App\models\ATSFlight;

class FareRequestCharter
{

    /**
     * @var ArrayOfCharterAccount $Accounts
     */
    protected $Accounts = null;

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
     * @var int $NumberOfCharterFares
     */
    protected $NumberOfCharterFares = null;

    /**
     * @var ArrayOfTouroperator $Touroperators
     */
    protected $Touroperators = null;

    /**
     * @param int $NumberOfCharterFares
     */
    public function __construct($NumberOfCharterFares)
    {
      $this->NumberOfCharterFares = $NumberOfCharterFares;
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
     * @return \App\models\ATSFlight\FareRequestCharter
     */
    public function setAccounts($Accounts)
    {
      $this->Accounts = $Accounts;
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
     * @return \App\models\ATSFlight\FareRequestCharter
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
     * @return \App\models\ATSFlight\FareRequestCharter
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
     * @return \App\models\ATSFlight\FareRequestCharter
     */
    public function setNumberOfAvailableFares($NumberOfAvailableFares)
    {
      $this->NumberOfAvailableFares = $NumberOfAvailableFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCharterFares()
    {
      return $this->NumberOfCharterFares;
    }

    /**
     * @param int $NumberOfCharterFares
     * @return \App\models\ATSFlight\FareRequestCharter
     */
    public function setNumberOfCharterFares($NumberOfCharterFares)
    {
      $this->NumberOfCharterFares = $NumberOfCharterFares;
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
     * @return \App\models\ATSFlight\FareRequestCharter
     */
    public function setTouroperators($Touroperators)
    {
      $this->Touroperators = $Touroperators;
      return $this;
    }

}
