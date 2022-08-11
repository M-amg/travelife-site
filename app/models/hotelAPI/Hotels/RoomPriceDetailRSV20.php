<?php

namespace App\models\hotelAPI\Hotels;

class RoomPriceDetailRSV20
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $ratePlanCode
     */
    protected $ratePlanCode = null;

    /**
     * @var Rates $rates
     */
    protected $rates = null;

    /**
     * @var string $typeCategoryCode
     */
    protected $typeCategoryCode = null;

    /**
     * @var string $typeCategoryName
     */
    protected $typeCategoryName = null;

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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setTypeName($typeName)
    {
      $this->typeName = $typeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->ratePlanCode;
    }

    /**
     * @param string $ratePlanCode
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setRatePlanCode($ratePlanCode)
    {
      $this->ratePlanCode = $ratePlanCode;
      return $this;
    }

    /**
     * @return Rates
     */
    public function getRates()
    {
      return $this->rates;
    }

    /**
     * @param Rates $rates
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setRates($rates)
    {
      $this->rates = $rates;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCategoryCode()
    {
      return $this->typeCategoryCode;
    }

    /**
     * @param string $typeCategoryCode
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setTypeCategoryCode($typeCategoryCode)
    {
      $this->typeCategoryCode = $typeCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCategoryName()
    {
      return $this->typeCategoryName;
    }

    /**
     * @param string $typeCategoryName
     * @return \App\models\hotelAPI\Hotels\RoomPriceDetailRSV20
     */
    public function setTypeCategoryName($typeCategoryName)
    {
      $this->typeCategoryName = $typeCategoryName;
      return $this;
    }

}
