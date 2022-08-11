<?php

namespace App\models\ATSFlight;

class GetRuleInformation
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RuleRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RuleRequestData $request
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
     * @return \App\models\ATSFlight\GetRuleInformation
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RuleRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RuleRequestData $request
     * @return \App\models\ATSFlight\GetRuleInformation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
