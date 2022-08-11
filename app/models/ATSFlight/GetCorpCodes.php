<?php

namespace App\models\ATSFlight;

class GetCorpCodes
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CorporateRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CorporateRequestData $request
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
     * @return \App\models\ATSFlight\GetCorpCodes
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CorporateRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CorporateRequestData $request
     * @return \App\models\ATSFlight\GetCorpCodes
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
