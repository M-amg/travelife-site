<?php

namespace App\models\ATSFlight;

class GetTicketInformation
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var TicketRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param TicketRequestData $request
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
     * @return \App\models\ATSFlight\GetTicketInformation
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return TicketRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TicketRequestData $request
     * @return \App\models\ATSFlight\GetTicketInformation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
