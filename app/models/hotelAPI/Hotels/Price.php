<?php

namespace App\models\hotelAPI\Hotels;

class Price
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $boardCategoryCode
     */
    protected $boardCategoryCode = null;

    /**
     * @var string $boardTypeCode
     */
    protected $boardTypeCode = null;

    /**
     * @var string $boardTypeName
     */
    protected $boardTypeName = null;

    /**
     * @var boolean $offer
     */
    protected $offer = null;

    /**
     * @var boolean $onRequest
     */
    protected $onRequest = null;

    /**
     * @var RoomPriceDetail[] $roomPrices
     */
    protected $roomPrices = null;

    /**
     * @param boolean $offer
     * @param boolean $onRequest
     */
    public function __construct($offer, $onRequest)
    {
      $this->offer = $offer;
      $this->onRequest = $onRequest;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardCategoryCode()
    {
      return $this->boardCategoryCode;
    }

    /**
     * @param string $boardCategoryCode
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setBoardCategoryCode($boardCategoryCode)
    {
      $this->boardCategoryCode = $boardCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardTypeCode()
    {
      return $this->boardTypeCode;
    }

    /**
     * @param string $boardTypeCode
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setBoardTypeCode($boardTypeCode)
    {
      $this->boardTypeCode = $boardTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardTypeName()
    {
      return $this->boardTypeName;
    }

    /**
     * @param string $boardTypeName
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setBoardTypeName($boardTypeName)
    {
      $this->boardTypeName = $boardTypeName;
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
     * @return \App\models\hotelAPI\Hotels\Price
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
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setOnRequest($onRequest)
    {
      $this->onRequest = $onRequest;
      return $this;
    }

    /**
     * @return RoomPriceDetail[]
     */
    public function getRoomPrices()
    {
      return $this->roomPrices;
    }

    /**
     * @param RoomPriceDetail[] $roomPrices
     * @return \App\models\hotelAPI\Hotels\Price
     */
    public function setRoomPrices(array $roomPrices = null)
    {
      $this->roomPrices = $roomPrices;
      return $this;
    }

}
