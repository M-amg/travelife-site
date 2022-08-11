<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmRQV21 extends ValuationRQV21
{

    /**
     * @var string $agencyReference
     */
    protected $agencyReference = null;

    /**
     * @var FlightInfo $arrival
     */
    protected $arrival = null;

    /**
     * @var string $basketId
     */
    protected $basketId = null;

    /**
     * @var boolean $closeBasket
     */
    protected $closeBasket = null;

    /**
     * @var Comment[] $comments
     */
    protected $comments = null;

    /**
     * @var FlightInfo $departure
     */
    protected $departure = null;

    /**
     * @var PaxListItem[] $paxList
     */
    protected $paxList = null;

    /**
     * @var string $sendDocumentationTo
     */
    protected $sendDocumentationTo = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @param boolean $onlyOnline
     * @param boolean $closeBasket
     */
    public function __construct($onlyOnline, $closeBasket)
    {
      parent::__construct($onlyOnline);
      $this->closeBasket = $closeBasket;
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->agencyReference;
    }

    /**
     * @param string $agencyReference
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setAgencyReference($agencyReference)
    {
      $this->agencyReference = $agencyReference;
      return $this;
    }

    /**
     * @return FlightInfo
     */
    public function getArrival()
    {
      return $this->arrival;
    }

    /**
     * @param FlightInfo $arrival
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setArrival($arrival)
    {
      $this->arrival = $arrival;
      return $this;
    }

    /**
     * @return string
     */
    public function getBasketId()
    {
      return $this->basketId;
    }

    /**
     * @param string $basketId
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setBasketId($basketId)
    {
      $this->basketId = $basketId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCloseBasket()
    {
      return $this->closeBasket;
    }

    /**
     * @param boolean $closeBasket
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setCloseBasket($closeBasket)
    {
      $this->closeBasket = $closeBasket;
      return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param Comment[] $comments
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return FlightInfo
     */
    public function getDeparture()
    {
      return $this->departure;
    }

    /**
     * @param FlightInfo $departure
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setDeparture($departure)
    {
      $this->departure = $departure;
      return $this;
    }

    /**
     * @return PaxListItem[]
     */
    public function getPaxList()
    {
      return $this->paxList;
    }

    /**
     * @param PaxListItem[] $paxList
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setPaxList(array $paxList = null)
    {
      $this->paxList = $paxList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendDocumentationTo()
    {
      return $this->sendDocumentationTo;
    }

    /**
     * @param string $sendDocumentationTo
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setSendDocumentationTo($sendDocumentationTo)
    {
      $this->sendDocumentationTo = $sendDocumentationTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitular()
    {
      return $this->titular;
    }

    /**
     * @param string $titular
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \App\models\hotelAPI\Hotels\ConfirmRQV21
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
