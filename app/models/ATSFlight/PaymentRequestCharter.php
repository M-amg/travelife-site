<?php

namespace App\models\ATSFlight;

class PaymentRequestCharter
{

    /**
     * @var CharterAccount $Account
     */
    protected $Account = null;

    /**
     * @var string $Touroperator
     */
    protected $Touroperator = null;

    
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
     * @return \App\models\ATSFlight\PaymentRequestCharter
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getTouroperator()
    {
      return $this->Touroperator;
    }

    /**
     * @param string $Touroperator
     * @return \App\models\ATSFlight\PaymentRequestCharter
     */
    public function setTouroperator($Touroperator)
    {
      $this->Touroperator = $Touroperator;
      return $this;
    }

}
