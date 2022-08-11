<?php

namespace App\models\ATSFlight;

class DisplayRequestCharter
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
     * @return \App\models\ATSFlight\DisplayRequestCharter
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
     * @return \App\models\ATSFlight\DisplayRequestCharter
     */
    public function setCharterLanguageCode($CharterLanguageCode)
    {
      $this->CharterLanguageCode = $CharterLanguageCode;
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
     * @return \App\models\ATSFlight\DisplayRequestCharter
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
     * @return \App\models\ATSFlight\DisplayRequestCharter
     */
    public function setTouroperators($Touroperators)
    {
      $this->Touroperators = $Touroperators;
      return $this;
    }

}
