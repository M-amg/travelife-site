<?php

namespace App\models\ATSFlight;

class Rebook
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RebookRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RebookRequestData $request
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
     * @return \App\models\ATSFlight\Rebook
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RebookRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RebookRequestData $request
     * @return \App\models\ATSFlight\Rebook
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
