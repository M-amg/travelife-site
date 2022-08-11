<?php

namespace App\models\hotelAPI\Hotels;

class ValuatedOccupationV15 extends ValuatedOccupation
{

    /**
     * @var boolean $onRequest
     */
    protected $onRequest = null;

    /**
     * @var PaxListItem $paxList
     */
    protected $paxList = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $numberOfDays
     * @param int $numberOfRooms
     * @param boolean $onRequest
     */
    public function __construct($adults, $children, $numberOfDays, $numberOfRooms, $onRequest)
    {
      parent::__construct($adults, $children, $numberOfDays, $numberOfRooms);
      $this->onRequest = $onRequest;
    }

    /**
     * @return boolean
     */
    public function getOnRequest()
    {
      return $this->onRequest;
    }

    /**
     * @param boolean $onRequest
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupationV15
     */
    public function setOnRequest($onRequest)
    {
      $this->onRequest = $onRequest;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupationV15
     */
    public function setPaxList($paxList)
    {
      $this->paxList = $paxList;
      return $this;
    }

}
