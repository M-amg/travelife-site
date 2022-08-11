<?php

namespace App\models\hotelAPI\Hotels;

class RoomPrice
{

    /**
     * @var string $applyTo
     */
    protected $applyTo = null;

    /**
     * @var float $forDays
     */
    protected $forDays = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var BoardTypePrice[] $pricesPerBoardType
     */
    protected $pricesPerBoardType = null;

    /**
     * @var RoomType $roomType
     */
    protected $roomType = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @param float $forDays
     */
    public function __construct($forDays)
    {
      $this->forDays = $forDays;
    }

    /**
     * @return string
     */
    public function getApplyTo()
    {
      return $this->applyTo;
    }

    /**
     * @param string $applyTo
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setApplyTo($applyTo)
    {
      $this->applyTo = $applyTo;
      return $this;
    }

    /**
     * @return float
     */
    public function getForDays()
    {
      return $this->forDays;
    }

    /**
     * @param float $forDays
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setForDays($forDays)
    {
      $this->forDays = $forDays;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
      if ($fromDate == null) {
       $this->fromDate = null;
      } else {
        $this->fromDate = $fromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BoardTypePrice[]
     */
    public function getPricesPerBoardType()
    {
      return $this->pricesPerBoardType;
    }

    /**
     * @param BoardTypePrice[] $pricesPerBoardType
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setPricesPerBoardType(array $pricesPerBoardType = null)
    {
      $this->pricesPerBoardType = $pricesPerBoardType;
      return $this;
    }

    /**
     * @return RoomType
     */
    public function getRoomType()
    {
      return $this->roomType;
    }

    /**
     * @param RoomType $roomType
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setRoomType($roomType)
    {
      $this->roomType = $roomType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->toDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toDate
     * @return \App\models\hotelAPI\Hotels\RoomPrice
     */
    public function setToDate(\DateTime $toDate = null)
    {
      if ($toDate == null) {
       $this->toDate = null;
      } else {
        $this->toDate = $toDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
