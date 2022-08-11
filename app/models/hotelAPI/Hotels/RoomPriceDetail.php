<?php

namespace App\models\hotelAPI\Hotels;

class RoomPriceDetail
{

    /**
     * @var CommentsRS[] $comments
     */
    protected $comments = null;

    /**
     * @var int $paxes
     */
    protected $paxes = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $pricePerPaxAndNight
     */
    protected $pricePerPaxAndNight = null;

    /**
     * @var float $pricePerRoomAndNight
     */
    protected $pricePerRoomAndNight = null;

    /**
     * @var string $typeCode
     */
    protected $typeCode = null;

    /**
     * @var string $typeName
     */
    protected $typeName = null;

    /**
     * @param int $paxes
     * @param float $price
     * @param float $pricePerPaxAndNight
     * @param float $pricePerRoomAndNight
     */
    public function __construct($paxes, $price, $pricePerPaxAndNight, $pricePerRoomAndNight)
    {
      $this->paxes = $paxes;
      $this->price = $price;
      $this->pricePerPaxAndNight = $pricePerPaxAndNight;
      $this->pricePerRoomAndNight = $pricePerRoomAndNight;
    }

    /**
     * @return CommentsRS[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param CommentsRS[] $comments
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaxes()
    {
      return $this->paxes;
    }

    /**
     * @param int $paxes
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setPaxes($paxes)
    {
      $this->paxes = $paxes;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getPricePerPaxAndNight()
    {
      return $this->pricePerPaxAndNight;
    }

    /**
     * @param float $pricePerPaxAndNight
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setPricePerPaxAndNight($pricePerPaxAndNight)
    {
      $this->pricePerPaxAndNight = $pricePerPaxAndNight;
      return $this;
    }

    /**
     * @return float
     */
    public function getPricePerRoomAndNight()
    {
      return $this->pricePerRoomAndNight;
    }

    /**
     * @param float $pricePerRoomAndNight
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setPricePerRoomAndNight($pricePerRoomAndNight)
    {
      $this->pricePerRoomAndNight = $pricePerRoomAndNight;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCode()
    {
      return $this->typeCode;
    }

    /**
     * @param string $typeCode
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setTypeCode($typeCode)
    {
      $this->typeCode = $typeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
      return $this->typeName;
    }

    /**
     * @param string $typeName
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetail
     */
    public function setTypeName($typeName)
    {
      $this->typeName = $typeName;
      return $this;
    }

}
