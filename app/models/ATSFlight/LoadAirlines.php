<?php

namespace App\models\ATSFlight;

class LoadAirlines
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var string $p_sSearchString
     */
    protected $p_sSearchString = null;

    /**
     * @param LoginData $Login
     * @param string $p_sSearchString
     */
    public function __construct($Login, $p_sSearchString)
    {
      $this->Login = $Login;
      $this->p_sSearchString = $p_sSearchString;
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
     * @return \App\models\ATSFlight\LoadAirlines
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getP_sSearchString()
    {
      return $this->p_sSearchString;
    }

    /**
     * @param string $p_sSearchString
     * @return \App\models\ATSFlight\LoadAirlines
     */
    public function setP_sSearchString($p_sSearchString)
    {
      $this->p_sSearchString = $p_sSearchString;
      return $this;
    }

}
