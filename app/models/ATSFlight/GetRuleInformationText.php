<?php

namespace App\models\ATSFlight;

class GetRuleInformationText
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RuleTextRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RuleTextRequestData $request
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
     * @return \App\models\ATSFlight\GetRuleInformationText
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RuleTextRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RuleTextRequestData $request
     * @return \App\models\ATSFlight\GetRuleInformationText
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
