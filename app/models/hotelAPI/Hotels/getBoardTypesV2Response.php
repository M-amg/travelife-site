<?php

namespace App\models\hotelAPI\Hotels;

class getBoardTypesV2Response
{

    /**
     * @var GetBoardTypesV2RS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBoardTypesV2RS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBoardTypesV2RS $result
     * @return \App\models\hotelAPI\Hotels\getBoardTypesV2Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
