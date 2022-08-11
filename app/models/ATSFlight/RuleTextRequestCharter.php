<?php

namespace App\models\ATSFlight;

class RuleTextRequestCharter
{

    /**
     * @var CharterAccount $Account
     */
    protected $Account = null;

    /**
     * @var string $TouroperatorCode
     */
    protected $TouroperatorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CharterAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param CharterAccount $Account
     * @return \App\models\ATSFlight\RuleTextRequestCharter
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
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
     * @return \App\models\ATSFlight\RuleTextRequestCharter
     */
    public function setTouroperatorCode($TouroperatorCode)
    {
      $this->TouroperatorCode = $TouroperatorCode;
      return $this;
    }

}
