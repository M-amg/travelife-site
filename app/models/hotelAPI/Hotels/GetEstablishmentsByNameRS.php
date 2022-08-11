<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentsByNameRS
{

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var EstablishmentSearchResult[] $result
     */
    protected $result = null;

    /**
     * @var int $toRow
     */
    protected $toRow = null;

    /**
     * @var int $totalRows
     */
    protected $totalRows = null;

    /**
     * @param int $fromRow
     * @param int $toRow
     * @param int $totalRows
     */
    public function __construct($fromRow, $toRow, $totalRows)
    {
      $this->fromRow = $fromRow;
      $this->toRow = $toRow;
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRS
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
      return $this;
    }

    /**
     * @return EstablishmentSearchResult[]
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentSearchResult[] $result
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRS
     */
    public function setResult(array $result = null)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return int
     */
    public function getToRow()
    {
      return $this->toRow;
    }

    /**
     * @param int $toRow
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRS
     */
    public function setToRow($toRow)
    {
      $this->toRow = $toRow;
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRS
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

}
