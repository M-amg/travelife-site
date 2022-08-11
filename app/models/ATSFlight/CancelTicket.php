<?php

namespace App\models\ATSFlight;

class CancelTicket
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CancelTicketRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CancelTicketRequestData $request
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
     * @return \App\models\ATSFlight\CancelTicket
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CancelTicketRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CancelTicketRequestData $request
     * @return \App\models\ATSFlight\CancelTicket
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
