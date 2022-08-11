<?php

namespace App\models\hotelAPI\Hotels;

class AvailabilityExtendsRS
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
     * @var AvailableHotelExtends[] $availableHotels
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityExtendsRS
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityExtendsRS
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
     * @return \App\models\hotelAPI\Hotels\AvailabilityExtendsRS
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

    /**
     * @return AvailableHotelExtends[]
     */
    public function getAvailableHotels()
    {
      return $this->availableHotels;
    }

    /**
     * @param AvailableHotelExtends[] $availableHotels
     * @return \App\models\hotelAPI\Hotels\AvailabilityExtendsRS
     */
    public function setAvailableHotels(array $availableHotels = null)
    {
      $this->availableHotels = $availableHotels;
      return $this;
    }

}
