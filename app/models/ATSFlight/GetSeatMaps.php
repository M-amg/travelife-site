<?php

namespace App\models\ATSFlight;

class GetSeatMaps
{

    /**
     * @var LoginData $login
     */
    protected $login = null;

    /**
     * @var SeatMapRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $login
     * @param SeatMapRequestData $request
     */
    public function __construct($login, $request)
    {
      $this->login = $login;
      $this->request = $request;
    }

    /**
     * @return LoginData
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param LoginData $login
     * @return \App\models\ATSFlight\GetSeatMaps
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return SeatMapRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SeatMapRequestData $request
     * @return \App\models\ATSFlight\GetSeatMaps
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
