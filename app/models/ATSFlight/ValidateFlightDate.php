<?php

namespace App\models\ATSFlight;

class ValidateFlightDate
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var ValidateFlightDateRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param ValidateFlightDateRequestData $request
     */
    public function __construct($Login, $request)
    {
      $this->Login = $Login;
      $this->request = $request;
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
     * @return \App\models\ATSFlight\ValidateFlightDate
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ValidateFlightDateRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ValidateFlightDateRequestData $request
     * @return \App\models\ATSFlight\ValidateFlightDate
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
