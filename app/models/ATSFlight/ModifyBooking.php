<?php

namespace App\models\ATSFlight;

class ModifyBooking
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var ModifyRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param ModifyRequestData $request
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
     * @return \App\models\ATSFlight\ModifyBooking
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ModifyRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ModifyRequestData $request
     * @return \App\models\ATSFlight\ModifyBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
