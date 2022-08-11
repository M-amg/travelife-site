<?php

namespace App\models\hotelAPI\Hotels;

class AvailabilityMultiRSV17
{

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var int $numRows
     */
    protected $numRows = null;

    /**
     * @var int $totalRows
     */
    protected $totalRows = null;

    /**
     * @var AvailableHotelV17[] $availableHotels
     */
    protected $availableHotels = null;

    /**
     * @param int $fromRow
     * @param int $numRows
     * @param int $totalRows
     */
    public function __construct($fromRow, $numRows, $totalRows)
    {
      $this->fromRow = $fromRow;
      $this->numRows = $numRows;
      $this->totalRows = $totalRows;
    }

    /**
     * @return int
     */
    public function getFromRow()
    {
      return $this->fromRow;
    }

    /**
     * @param int $fromRow
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRSV17
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumRows()
    {
      return $this->numRows;
    }

    /**
     * @param int $numRows
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRSV17
     */
    public function setNumRows($numRows)
    {
      $this->numRows = $numRows;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRows()
    {
      return $this->totalRows;
    }

    /**
     * @param int $totalRows
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRSV17
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

    /**
     * @return AvailableHotelV17[]
     */
    public function getAvailableHotels()
    {
      return $this->availableHotels;
    }

    /**
     * @param AvailableHotelV17[] $availableHotels
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRSV17
     */
    public function setAvailableHotels(array $availableHotels = null)
    {
      $this->availableHotels = $availableHotels;
      return $this;
    }

}
