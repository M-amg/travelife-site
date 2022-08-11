<?php

namespace App\models\hotelAPI\Hotels;

class BoardPrice
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $boardId
     */
    protected $boardId = null;

    /**
     * @var string $boardName
     */
    protected $boardName = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param float $amount
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \App\models\hotelAPI\Hotels\BoardPrice
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardId()
    {
      return $this->boardId;
    }

    /**
     * @param string $boardId
     * @return \App\models\hotelAPI\Hotels\BoardPrice
     */
    public function setBoardId($boardId)
    {
      $this->boardId = $boardId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardName()
    {
      return $this->boardName;
    }

    /**
     * @param string $boardName
     * @return \App\models\hotelAPI\Hotels\BoardPrice
     */
    public function setBoardName($boardName)
    {
      $this->boardName = $boardName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \App\models\hotelAPI\Hotels\BoardPrice
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
