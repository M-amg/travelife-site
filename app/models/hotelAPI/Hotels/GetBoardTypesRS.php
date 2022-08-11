<?php

namespace App\models\hotelAPI\Hotels;

class GetBoardTypesRS
{

    /**
     * @var BoardType[] $boardTypes
     */
    protected $boardTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoardType[]
     */
    public function getBoardTypes()
    {
      return $this->boardTypes;
    }

    /**
     * @param BoardType[] $boardTypes
     * @return \App\models\hotelAPI\Hotels\GetBoardTypesRS
     */
    public function setBoardTypes(array $boardTypes = null)
    {
      $this->boardTypes = $boardTypes;
      return $this;
    }

}
