<?php

namespace App\models\ATSFlight;

class GetEntryClients
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var string $DBCode
     */
    protected $DBCode = null;

    /**
     * @param LoginData $Login
     * @param string $DBCode
     */
    public function __construct($Login, $DBCode)
    {
      $this->Login = $Login;
      $this->DBCode = $DBCode;
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
     * @return \App\models\ATSFlight\GetEntryClients
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getDBCode()
    {
      return $this->DBCode;
    }

    /**
     * @param string $DBCode
     * @return \App\models\ATSFlight\GetEntryClients
     */
    public function setDBCode($DBCode)
    {
      $this->DBCode = $DBCode;
      return $this;
    }

}
