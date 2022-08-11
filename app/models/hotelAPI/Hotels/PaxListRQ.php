<?php

namespace App\models\hotelAPI\Hotels;

class PaxListRQ
{

    /**
     * @var PaxRQ[] $pax
     */
    protected $pax = null;

    /**
     * @var string $roomTypeCode
     */
    protected $roomTypeCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaxRQ[]
     */
    public function getPax()
    {
      return $this->pax;
    }

    /**
     * @param PaxRQ[] $pax
     * @return \App\models\hotelAPI\Hotels\PaxListRQ
     */
    public function setPax(array $pax = null)
    {
      $this->pax = $pax;
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
     * @return \App\models\hotelAPI\Hotels\PaxListRQ
     */
    public function setRoomTypeCode($roomTypeCode)
    {
      $this->roomTypeCode = $roomTypeCode;
      return $this;
    }

}
