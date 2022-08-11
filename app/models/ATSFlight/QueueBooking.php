<?php

namespace App\models\ATSFlight;

class QueueBooking
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var QueueRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param QueueRequestData $request
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
     * @return \App\models\ATSFlight\QueueBooking
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return QueueRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param QueueRequestData $request
     * @return \App\models\ATSFlight\QueueBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
