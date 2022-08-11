<?php

namespace App\models\hotelAPI\Hotels;

class ValuatedOccupation
{

    /**
     * @var int $adults
     */
    protected $adults = null;

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var string $boardTypeCode
     */
    protected $boardTypeCode = null;

    /**
     * @var string $boardTypeName
     */
    protected $boardTypeName = null;

    /**
     * @var CommentsRS[] $cancellationComments
     */
    protected $cancellationComments = null;

    /**
     * @var int $children
     */
    protected $children = null;

    /**
     * @var int[] $childrenAges
     */
    protected $childrenAges = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var int $numberOfDays
     */
    protected $numberOfDays = null;

    /**
     * @var int $numberOfRooms
     */
    protected $numberOfRooms = null;

    /**
     * @var string $roomTypeCode
     */
    protected $roomTypeCode = null;

    /**
     * @var string $roomTypeName
     */
    protected $roomTypeName = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @param int $adults
     * @param int $children
     * @param int $numberOfDays
     * @param int $numberOfRooms
     */
    public function __construct($adults, $children, $numberOfDays, $numberOfRooms)
    {
      $this->adults = $adults;
      $this->children = $children;
      $this->numberOfDays = $numberOfDays;
      $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->adults;
    }

    /**
     * @param int $adults
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setAdults($adults)
    {
      $this->adults = $adults;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardTypeCode()
    {
      return $this->boardTypeCode;
    }

    /**
     * @param string $boardTypeCode
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setBoardTypeCode($boardTypeCode)
    {
      $this->boardTypeCode = $boardTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoardTypeName()
    {
      return $this->boardTypeName;
    }

    /**
     * @param string $boardTypeName
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setBoardTypeName($boardTypeName)
    {
      $this->boardTypeName = $boardTypeName;
      return $this;
    }

    /**
     * @return CommentsRS[]
     */
    public function getCancellationComments()
    {
      return $this->cancellationComments;
    }

    /**
     * @param CommentsRS[] $cancellationComments
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setCancellationComments(array $cancellationComments = null)
    {
      $this->cancellationComments = $cancellationComments;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param int $children
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChildrenAges()
    {
      return $this->childrenAges;
    }

    /**
     * @param int[] $childrenAges
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setChildrenAges(array $childrenAges = null)
    {
      $this->childrenAges = $childrenAges;
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
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
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
     * @return int
     */
    public function getNumberOfDays()
    {
      return $this->numberOfDays;
    }

    /**
     * @param int $numberOfDays
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setNumberOfDays($numberOfDays)
    {
      $this->numberOfDays = $numberOfDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->numberOfRooms;
    }

    /**
     * @param int $numberOfRooms
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setNumberOfRooms($numberOfRooms)
    {
      $this->numberOfRooms = $numberOfRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeCode()
    {
      return $this->roomTypeCode;
    }

    /**
     * @param string $roomTypeCode
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setRoomTypeCode($roomTypeCode)
    {
      $this->roomTypeCode = $roomTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
      return $this->roomTypeName;
    }

    /**
     * @param string $roomTypeName
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
     */
    public function setRoomTypeName($roomTypeName)
    {
      $this->roomTypeName = $roomTypeName;
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
     * @return \App\models\hotelAPI\Hotels\ValuatedOccupation
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
