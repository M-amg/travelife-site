<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentsByNameRQ
{

    /**
     * @var string $agencyCode
     */
    protected $agencyCode = null;

    /**
     * @var string $brandCode
     */
    protected $brandCode = null;

    /**
     * @var string $pointOfSaleId
     */
    protected $pointOfSaleId = null;

    /**
     * @var string $areaCode
     */
    protected $areaCode = null;

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;

    /**
     * @var string[] $establishmentCategories
     */
    protected $establishmentCategories = null;

    /**
     * @var string[] $establishmentTypes
     */
    protected $establishmentTypes = null;

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var int $numRows
     */
    protected $numRows = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var string $searchName
     */
    protected $searchName = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $fromRow
     * @param int $numRows
     */
    public function __construct($fromRow, $numRows)
    {
      $this->fromRow = $fromRow;
      $this->numRows = $numRows;
    }

    /**
     * @return string
     */
    public function getAgencyCode()
    {
      return $this->agencyCode;
    }

    /**
     * @param string $agencyCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setAgencyCode($agencyCode)
    {
      $this->agencyCode = $agencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandCode()
    {
      return $this->brandCode;
    }

    /**
     * @param string $brandCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setBrandCode($brandCode)
    {
      $this->brandCode = $brandCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfSaleId()
    {
      return $this->pointOfSaleId;
    }

    /**
     * @param string $pointOfSaleId
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
      return $this->areaCode;
    }

    /**
     * @param string $areaCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setAreaCode($areaCode)
    {
      $this->areaCode = $areaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
      return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setCityCode($cityCode)
    {
      $this->cityCode = $cityCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEstablishmentCategories()
    {
      return $this->establishmentCategories;
    }

    /**
     * @param string[] $establishmentCategories
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setEstablishmentCategories(array $establishmentCategories = null)
    {
      $this->establishmentCategories = $establishmentCategories;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEstablishmentTypes()
    {
      return $this->establishmentTypes;
    }

    /**
     * @param string[] $establishmentTypes
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setEstablishmentTypes(array $establishmentTypes = null)
    {
      $this->establishmentTypes = $establishmentTypes;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setNumRows($numRows)
    {
      $this->numRows = $numRows;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchName()
    {
      return $this->searchName;
    }

    /**
     * @param string $searchName
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setSearchName($searchName)
    {
      $this->searchName = $searchName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQ
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
