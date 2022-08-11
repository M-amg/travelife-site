<?php

namespace App\models\hotelAPI\Hotels;

class RoomOccupancyRQV20
{

    /**
     * @var int $adults
     */
    protected $adults = null;

    /**
     * @var string $boardTypeCode
     */
    protected $boardTypeCode = null;

    /**
     * @var string $boardTypeName
     */
    protected $boardTypeName = null;

    /**
     * @var int $children
     */
    protected $children = null;

    /**
     * @var int[] $childrenAges
     */
    protected $childrenAges = null;

    /**
     * @var int $numberOfRooms
     */
    protected $numberOfRooms = null;

    /**
     * @var string $roomTypeCode
     */
    protected $roomTypeCode = null;

    /**
     * @var string $roomTypeName
     */
    protected $roomTypeName = null;

    /**
     * @var string $ratePlanCode
     */
    protected $ratePlanCode = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $numberOfRooms
     */
    public function __construct($adults, $children, $numberOfRooms)
    {
      $this->adults = $adults;
      $this->children = $children;
      $this->numberOfRooms = $numberOfRooms;
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setAdults($adults)
    {
      $this->adults = $adults;
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setBoardTypeName($boardTypeName)
    {
      $this->boardTypeName = $boardTypeName;
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setChildrenAges(array $childrenAges = null)
    {
      $this->childrenAges = $childrenAges;
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setNumberOfRooms($numberOfRooms)
    {
      $this->numberOfRooms = $numberOfRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeCode()
    {
      return $this->roomTypeCode;
    }

    /**
     * @param string $roomTypeCode
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setRoomTypeCode($roomTypeCode)
    {
      $this->roomTypeCode = $roomTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->roomTypeName;
    }

    /**
     * @param string $roomTypeName
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setRoomTypeName($roomTypeName)
    {
      $this->roomTypeName = $roomTypeName;
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
     * @return \App\models\hotelAPI\Hotels\RoomOccupancyRQV20
     */
    public function setRatePlanCode($ratePlanCode)
    {
      $this->ratePlanCode = $ratePlanCode;
      return $this;
    }

}
