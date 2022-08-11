<?php

namespace App\models\hotelAPI\Basket;

class ValuatedOccupationV12 extends ValuatedOccupation
{

    /**
     * @var PaxListItem $paxList
     */
    protected $paxList = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $numberOfDays
     * @param int $numberOfRooms
     */
    public function __construct($adults, $children, $numberOfDays, $numberOfRooms)
    {
      parent::__construct($adults, $children, $numberOfDays, $numberOfRooms);
    }

    /**
     * @return PaxListItem
     */
    public function getPaxList()
    {
      return $this->paxList;
    }

    /**
     * @param PaxListItem $paxList
     * @return \App\models\hotelAPI\Basket\ValuatedOccupationV12
     */
    public function setPaxList($paxList)
    {
      $this->paxList = $paxList;
      return $this;
    }

}
