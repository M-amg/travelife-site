<?php

namespace App\models\hotelAPI\Hotels;

class BoardTypePrice
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var BoardType $boardType
     */
    protected $boardType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return \App\models\hotelAPI\Hotels\BoardTypePrice
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return BoardType
     */
    public function getBoardType()
    {
      return $this->boardType;
    }

    /**
     * @param BoardType $boardType
     * @return \App\models\hotelAPI\Hotels\BoardTypePrice
     */
    public function setBoardType($boardType)
    {
      $this->boardType = $boardType;
      return $this;
    }

}
