<?php

namespace App\models\ATSFlight;

class BookFare
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var BookRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param BookRequestData $request
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
     * @return \App\models\ATSFlight\BookFare
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return BookRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param BookRequestData $request
     * @return \App\models\ATSFlight\BookFare
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
