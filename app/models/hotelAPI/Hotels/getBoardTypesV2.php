<?php

namespace App\models\hotelAPI\Hotels;

class getBoardTypesV2
{

    /**
     * @var GetBoardTypesV2RQ $GetBoardTypesV2RQ_1
     */
    protected $GetBoardTypesV2RQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBoardTypesV2RQ
     */
    public function getGetBoardTypesV2RQ_1()
    {
      return $this->GetBoardTypesV2RQ_1;
    }

    /**
     * @param GetBoardTypesV2RQ $GetBoardTypesV2RQ_1
     * @return \App\models\hotelAPI\Hotels\getBoardTypesV2
     */
    public function setGetBoardTypesV2RQ_1($GetBoardTypesV2RQ_1)
    {
      $this->GetBoardTypesV2RQ_1 = $GetBoardTypesV2RQ_1;
      return $this;
    }

}
