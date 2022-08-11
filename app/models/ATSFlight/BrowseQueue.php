<?php

namespace App\models\ATSFlight;

class BrowseQueue
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var BrowseRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param BrowseRequestData $request
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
     * @return \App\models\ATSFlight\BrowseQueue
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return BrowseRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param BrowseRequestData $request
     * @return \App\models\ATSFlight\BrowseQueue
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
