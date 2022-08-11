<?php

namespace App\models\hotelAPI\Hotels;

class getRoomTypes
{

    /**
     * @var GetRoomTypesRQ $GetRoomTypesRQ_1
     */
    protected $GetRoomTypesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetRoomTypesRQ
     */
    public function getGetRoomTypesRQ_1()
    {
      return $this->GetRoomTypesRQ_1;
    }

    /**
     * @param GetRoomTypesRQ $GetRoomTypesRQ_1
     * @return \App\models\hotelAPI\Hotels\getRoomTypes
     */
    public function setGetRoomTypesRQ_1($GetRoomTypesRQ_1)
    {
      $this->GetRoomTypesRQ_1 = $GetRoomTypesRQ_1;
      return $this;
    }

}
