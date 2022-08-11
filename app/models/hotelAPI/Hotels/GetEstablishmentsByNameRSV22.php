<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentsByNameRSV22
{

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var int $toRow
     */
    protected $toRow = null;

    /**
     * @var int $totalRows
     */
    protected $totalRows = null;

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @var EstablishmentSearchResultV12[] $result
     */
    protected $result = null;

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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRSV22
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRSV22
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRSV22
     */
    public function setTotalRows($totalRows)
    {
      $this->totalRows = $totalRows;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingAgencyCode()
    {
      return $this->pricingAgencyCode;
    }

    /**
     * @param string $pricingAgencyCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRSV22
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

    /**
     * @return EstablishmentSearchResultV12[]
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param EstablishmentSearchResultV12[] $result
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRSV22
     */
    public function setResult(array $result = null)
    {
      $this->result = $result;
      return $this;
    }

}
