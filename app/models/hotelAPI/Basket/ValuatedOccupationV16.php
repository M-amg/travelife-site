<?php

namespace App\models\hotelAPI\Basket;

class ValuatedOccupationV16 extends ValuatedOccupation
{

    /**
     * @var CommentsRSV2[] $comments
     */
    protected $comments = null;

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
     * @return CommentsRSV2[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param CommentsRSV2[] $comments
     * @return \App\models\hotelAPI\Basket\ValuatedOccupationV16
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
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
     * @return \App\models\hotelAPI\Basket\ValuatedOccupationV16
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
     * @return \App\models\hotelAPI\Basket\ValuatedOccupationV16
     */
    public function setPaxList($paxList)
    {
      $this->paxList = $paxList;
      return $this;
    }

}
