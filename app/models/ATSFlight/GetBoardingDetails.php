<?php

namespace App\models\ATSFlight;

class GetBoardingDetails
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var BoardingRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param BoardingRequestData $request
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
     * @return \App\models\ATSFlight\GetBoardingDetails
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return BoardingRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param BoardingRequestData $request
     * @return \App\models\ATSFlight\GetBoardingDetails
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
