<?php

namespace App\models\hotelAPI\Hotels;

class getBoardTypesV22Response
{

    /**
     * @var GetBoardTypesV22RS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBoardTypesV22RS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBoardTypesV22RS $result
     * @return \App\models\hotelAPI\Hotels\getBoardTypesV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
