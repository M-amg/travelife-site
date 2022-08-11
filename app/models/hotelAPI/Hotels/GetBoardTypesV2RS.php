<?php

namespace App\models\hotelAPI\Hotels;

class GetBoardTypesV2RS
{

    /**
     * @var BoardTypeV2[] $boardTypesV2
     */
    protected $boardTypesV2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoardTypeV2[]
     */
    public function getBoardTypesV2()
    {
      return $this->boardTypesV2;
    }

    /**
     * @param BoardTypeV2[] $boardTypesV2
     * @return \App\models\hotelAPI\Hotels\GetBoardTypesV2RS
     */
    public function setBoardTypesV2(array $boardTypesV2 = null)
    {
      $this->boardTypesV2 = $boardTypesV2;
      return $this;
    }

}
