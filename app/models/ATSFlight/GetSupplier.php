<?php

namespace App\models\ATSFlight;

class GetSupplier
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var SupplierRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param SupplierRequestData $request
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
     * @return \App\models\ATSFlight\GetSupplier
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return SupplierRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SupplierRequestData $request
     * @return \App\models\ATSFlight\GetSupplier
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
