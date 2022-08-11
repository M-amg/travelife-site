<?php

namespace App\models\hotelAPI\Hotels;

class RoomRSV20
{

    /**
     * @var int $adults
     */
    protected $adults = null;

    /**
     * @var int $children
     */
    protected $children = null;

    /**
     * @var int[] $childrenAges
     */
    protected $childrenAges = null;

    /**
     * @var Amount $priceOfFirstNight
     */
    protected $priceOfFirstNight = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var string $typeCode
     */
    protected $typeCode = null;

    /**
     * @var string $typeName
     */
    protected $typeName = null;

    /**
     * @var string $typeCategoryCode
     */
    protected $typeCategoryCode = null;

    /**
     * @var string $typeCategoryName
     */
    protected $typeCategoryName = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $quantity
     */
    public function __construct($adults, $children, $quantity)
    {
      $this->adults = $adults;
      $this->children = $children;
      $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->adults;
    }

    /**
     * @param int $adults
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setAdults($adults)
    {
      $this->adults = $adults;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param int $children
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChildrenAges()
    {
      return $this->childrenAges;
    }

    /**
     * @param int[] $childrenAges
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setChildrenAges(array $childrenAges = null)
    {
      $this->childrenAges = $childrenAges;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getPriceOfFirstNight()
    {
      return $this->priceOfFirstNight;
    }

    /**
     * @param Amount $priceOfFirstNight
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setPriceOfFirstNight($priceOfFirstNight)
    {
      $this->priceOfFirstNight = $priceOfFirstNight;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setTypeName($typeName)
    {
      $this->typeName = $typeName;
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
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
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
     * @return \App\models\hotelAPI\Hotels\RoomRSV20
     */
    public function setTypeCategoryName($typeCategoryName)
    {
      $this->typeCategoryName = $typeCategoryName;
      return $this;
    }

}
