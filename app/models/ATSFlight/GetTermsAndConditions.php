<?php

namespace App\models\ATSFlight;

class GetTermsAndConditions
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var TermsAndConditionsRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param TermsAndConditionsRequestData $request
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
     * @return \App\models\ATSFlight\GetTermsAndConditions
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return TermsAndConditionsRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TermsAndConditionsRequestData $request
     * @return \App\models\ATSFlight\GetTermsAndConditions
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
