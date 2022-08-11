<?php

namespace App\models\hotelAPI\Hotels;

class getBoardTypesResponse
{

    /**
     * @var GetBoardTypesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetBoardTypesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetBoardTypesRS $result
     * @return \App\models\hotelAPI\Hotels\getBoardTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
