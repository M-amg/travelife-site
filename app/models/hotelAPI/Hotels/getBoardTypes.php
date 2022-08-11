<?php

namespace App\models\hotelAPI\Hotels;

class getBoardTypes
{

    /**
     * @var GetBoardTypesRQ $GetBoardTypesRQ_1
     */
    protected $GetBoardTypesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBoardTypesRQ
     */
    public function getGetBoardTypesRQ_1()
    {
      return $this->GetBoardTypesRQ_1;
    }

    /**
     * @param GetBoardTypesRQ $GetBoardTypesRQ_1
     * @return \App\models\hotelAPI\Hotels\getBoardTypes
     */
    public function setGetBoardTypesRQ_1($GetBoardTypesRQ_1)
    {
      $this->GetBoardTypesRQ_1 = $GetBoardTypesRQ_1;
      return $this;
    }

}
