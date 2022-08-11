<?php

namespace App\models\ATSFlight;

class GetCalendarDisplay
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CalendarRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CalendarRequestData $request
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
     * @return \App\models\ATSFlight\GetCalendarDisplay
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CalendarRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CalendarRequestData $request
     * @return \App\models\ATSFlight\GetCalendarDisplay
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
