<?php

namespace App\models\hotelAPI\Hotels;

class PaxListItem
{

    /**
     * @var string[] $paxNames
     */
    protected $paxNames = null;

    /**
     * @var string $roomTypeCode
     */
    protected $roomTypeCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getPaxNames()
    {
      return $this->paxNames;
    }

    /**
     * @param string[] $paxNames
     * @return \App\models\hotelAPI\Hotels\PaxListItem
     */
    public function setPaxNames(array $paxNames = null)
    {
      $this->paxNames = $paxNames;
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
     * @return \App\models\hotelAPI\Hotels\PaxListItem
     */
    public function setRoomTypeCode($roomTypeCode)
    {
      $this->roomTypeCode = $roomTypeCode;
      return $this;
    }

}
