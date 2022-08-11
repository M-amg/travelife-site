<?php

namespace App\models\ATSFlight;

class ReissueTicket
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var ReissueRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param ReissueRequestData $request
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
     * @return \App\models\ATSFlight\ReissueTicket
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ReissueRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ReissueRequestData $request
     * @return \App\models\ATSFlight\ReissueTicket
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
