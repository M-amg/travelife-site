<?php

namespace App\models\ATSFlight;

class UpdateUserAgreementList
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @param LoginData $Login
     */
    public function __construct($Login)
    {
      $this->Login = $Login;
    }

    /**
     * @return LoginData
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param LoginData $Login
     * @return \App\models\ATSFlight\UpdateUserAgreementList
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

}
