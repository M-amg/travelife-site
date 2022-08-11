<?php

namespace App\models\hotelAPI\Hotels;

class AvailabilityMultiRS
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
     * @var AvailableHotelComments[] $availableHotels
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRS
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRS
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRS
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

    /**
     * @return AvailableHotelComments[]
     */
    public function getAvailableHotels()
    {
      return $this->availableHotels;
    }

    /**
     * @param AvailableHotelComments[] $availableHotels
     * @return \App\models\hotelAPI\Hotels\AvailabilityMultiRS
     */
    public function setAvailableHotels(array $availableHotels = null)
    {
      $this->availableHotels = $availableHotels;
      return $this;
    }

}
