<?php

namespace App\models\hotelAPI\Hotels;

class GetRoomTypesRS
{

    /**
     * @var RoomTypeVO[] $roomTypes
     */
    protected $roomTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoomTypeVO[]
     */
    public function getRoomTypes()
    {
      return $this->roomTypes;
    }

    /**
     * @param RoomTypeVO[] $roomTypes
     * @return \App\models\hotelAPI\Hotels\GetRoomTypesRS
     */
    public function setRoomTypes(array $roomTypes = null)
    {
      $this->roomTypes = $roomTypes;
      return $this;
    }

}
