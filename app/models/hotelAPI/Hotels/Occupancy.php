<?php

namespace App\models\hotelAPI\Hotels;

class Occupancy
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
     * @var int $numberOfRooms
     */
    protected $numberOfRooms = null;

    /**
     * @var string[] $roomTypes
     */
    protected $roomTypes = null;

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
     * @return \App\models\hotelAPI\Hotels\Occupancy
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
     * @return \App\models\hotelAPI\Hotels\Occupancy
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
     * @return \App\models\hotelAPI\Hotels\Occupancy
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
     * @return \App\models\hotelAPI\Hotels\Occupancy
     */
    public function setNumberOfRooms($numberOfRooms)
    {
      $this->numberOfRooms = $numberOfRooms;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRoomTypes()
    {
      return $this->roomTypes;
    }

    /**
     * @param string[] $roomTypes
     * @return \App\models\hotelAPI\Hotels\Occupancy
     */
    public function setRoomTypes(array $roomTypes = null)
    {
      $this->roomTypes = $roomTypes;
      return $this;
    }

}
