<?php

namespace App\models\ATSFlight;

class RevalidateTicket
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RevalidateRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RevalidateRequestData $request
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
     * @return \App\models\ATSFlight\RevalidateTicket
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RevalidateRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RevalidateRequestData $request
     * @return \App\models\ATSFlight\RevalidateTicket
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
