<?php

namespace App\models\hotelAPI\Basket;

class ConfirmRQExtendsV22 extends ConfirmRQExtends
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    /**
     * @var PaxListServiceRQ[] $paxList
     */
    protected $paxList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ExtendedLogin
     */
    public function getExtendedLogin()
    {
      return $this->extendedLogin;
    }

    /**
     * @param ExtendedLogin $extendedLogin
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtendsV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

    /**
     * @return PaxListServiceRQ[]
     */
    public function getPaxList()
    {
      return $this->paxList;
    }

    /**
     * @param PaxListServiceRQ[] $paxList
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtendsV22
     */
    public function setPaxList(array $paxList = null)
    {
      $this->paxList = $paxList;
      return $this;
    }

}
