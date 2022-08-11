<?php

namespace App\models\hotelAPI\Basket;

class ConfirmRQExtendsV2 extends ConfirmRQExtends
{

    /**
     * @var PaxListItemService[] $paxList
     */
    protected $paxList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return PaxListItemService[]
     */
    public function getPaxList()
    {
      return $this->paxList;
    }

    /**
     * @param PaxListItemService[] $paxList
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtendsV2
     */
    public function setPaxList(array $paxList = null)
    {
      $this->paxList = $paxList;
      return $this;
    }

}
