<?php

namespace App\models\hotelAPI\Hotels;

class AvailableRoom
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $numberOfRooms
     */
    protected $numberOfRooms = null;

    /**
     * @var boolean $offer
     */
    protected $offer = null;

    /**
     * @var boolean $onRequest
     */
    protected $onRequest = null;

    /**
     * @var boolean $onRequestDueToMinimumStayNights
     */
    protected $onRequestDueToMinimumStayNights = null;

    /**
     * @var BoardPrice[] $prices
     */
    protected $prices = null;

    /**
     * @var boolean $sharedStock
     */
    protected $sharedStock = null;

    /**
     * @var boolean $stock
     */
    protected $stock = null;

    /**
     * @param int $numberOfRooms
     * @param boolean $offer
     * @param boolean $onRequest
     * @param boolean $onRequestDueToMinimumStayNights
     * @param boolean $sharedStock
     * @param boolean $stock
     */
    public function __construct($numberOfRooms, $offer, $onRequest, $onRequestDueToMinimumStayNights, $sharedStock, $stock)
    {
      $this->numberOfRooms = $numberOfRooms;
      $this->offer = $offer;
      $this->onRequest = $onRequest;
      $this->onRequestDueToMinimumStayNights = $onRequestDueToMinimumStayNights;
      $this->sharedStock = $sharedStock;
      $this->stock = $stock;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->numberOfRooms;
    }

    /**
     * @param int $numberOfRooms
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setNumberOfRooms($numberOfRooms)
    {
      $this->numberOfRooms = $numberOfRooms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOffer()
    {
      return $this->offer;
    }

    /**
     * @param boolean $offer
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setOffer($offer)
    {
      $this->offer = $offer;
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
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setOnRequest($onRequest)
    {
      $this->onRequest = $onRequest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnRequestDueToMinimumStayNights()
    {
      return $this->onRequestDueToMinimumStayNights;
    }

    /**
     * @param boolean $onRequestDueToMinimumStayNights
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setOnRequestDueToMinimumStayNights($onRequestDueToMinimumStayNights)
    {
      $this->onRequestDueToMinimumStayNights = $onRequestDueToMinimumStayNights;
      return $this;
    }

    /**
     * @return BoardPrice[]
     */
    public function getPrices()
    {
      return $this->prices;
    }

    /**
     * @param BoardPrice[] $prices
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setPrices(array $prices = null)
    {
      $this->prices = $prices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSharedStock()
    {
      return $this->sharedStock;
    }

    /**
     * @param boolean $sharedStock
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setSharedStock($sharedStock)
    {
      $this->sharedStock = $sharedStock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStock()
    {
      return $this->stock;
    }

    /**
     * @param boolean $stock
     * @return \App\models\hotelAPI\Hotels\AvailableRoom
     */
    public function setStock($stock)
    {
      $this->stock = $stock;
      return $this;
    }

}
