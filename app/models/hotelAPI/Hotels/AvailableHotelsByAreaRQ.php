<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsByAreaRQ
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
     * @var string[] $boardTypes
     */
    protected $boardTypes = null;

    /**
     * @var \DateTime $checkin
     */
    protected $checkin = null;

    /**
     * @var \DateTime $checkout
     */
    protected $checkout = null;

    /**
     * @var string[] $establishmentCategories
     */
    protected $establishmentCategories = null;

    /**
     * @var string $establishmentName
     */
    protected $establishmentName = null;

    /**
     * @var string[] $establishmentTypes
     */
    protected $establishmentTypes = null;

    /**
     * @var float $fromPrice
     */
    protected $fromPrice = null;

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var boolean $includeEstablishmentData
     */
    protected $includeEstablishmentData = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var int $maxRoomCombinationsPerEstablishment
     */
    protected $maxRoomCombinationsPerEstablishment = null;

    /**
     * @var int $numRows
     */
    protected $numRows = null;

    /**
     * @var Occupancy[] $occupancies
     */
    protected $occupancies = null;

    /**
     * @var boolean $onlyOnline
     */
    protected $onlyOnline = null;

    /**
     * @var string $orderBy
     */
    protected $orderBy = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var float $toPrice
     */
    protected $toPrice = null;

    /**
     * @var string $areaCode
     */
    protected $areaCode = null;

    /**
     * @param float $fromPrice
     * @param int $fromRow
     * @param boolean $includeEstablishmentData
     * @param int $maxRoomCombinationsPerEstablishment
     * @param int $numRows
     * @param boolean $onlyOnline
     * @param float $toPrice
     */
    public function __construct($fromPrice, $fromRow, $includeEstablishmentData, $maxRoomCombinationsPerEstablishment, $numRows, $onlyOnline, $toPrice)
    {
      $this->fromPrice = $fromPrice;
      $this->fromRow = $fromRow;
      $this->includeEstablishmentData = $includeEstablishmentData;
      $this->maxRoomCombinationsPerEstablishment = $maxRoomCombinationsPerEstablishment;
      $this->numRows = $numRows;
      $this->onlyOnline = $onlyOnline;
      $this->toPrice = $toPrice;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getBoardTypes()
    {
      return $this->boardTypes;
    }

    /**
     * @param string[] $boardTypes
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setBoardTypes(array $boardTypes = null)
    {
      $this->boardTypes = $boardTypes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckin()
    {
      if ($this->checkin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkin
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setCheckin(\DateTime $checkin = null)
    {
      if ($checkin == null) {
       $this->checkin = null;
      } else {
        $this->checkin = $checkin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckout()
    {
      if ($this->checkout == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkout);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkout
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setCheckout(\DateTime $checkout = null)
    {
      if ($checkout == null) {
       $this->checkout = null;
      } else {
        $this->checkout = $checkout->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setEstablishmentCategories(array $establishmentCategories = null)
    {
      $this->establishmentCategories = $establishmentCategories;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstablishmentName()
    {
      return $this->establishmentName;
    }

    /**
     * @param string $establishmentName
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setEstablishmentName($establishmentName)
    {
      $this->establishmentName = $establishmentName;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setEstablishmentTypes(array $establishmentTypes = null)
    {
      $this->establishmentTypes = $establishmentTypes;
      return $this;
    }

    /**
     * @return float
     */
    public function getFromPrice()
    {
      return $this->fromPrice;
    }

    /**
     * @param float $fromPrice
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setFromPrice($fromPrice)
    {
      $this->fromPrice = $fromPrice;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeEstablishmentData()
    {
      return $this->includeEstablishmentData;
    }

    /**
     * @param boolean $includeEstablishmentData
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setIncludeEstablishmentData($includeEstablishmentData)
    {
      $this->includeEstablishmentData = $includeEstablishmentData;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRoomCombinationsPerEstablishment()
    {
      return $this->maxRoomCombinationsPerEstablishment;
    }

    /**
     * @param int $maxRoomCombinationsPerEstablishment
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setMaxRoomCombinationsPerEstablishment($maxRoomCombinationsPerEstablishment)
    {
      $this->maxRoomCombinationsPerEstablishment = $maxRoomCombinationsPerEstablishment;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setNumRows($numRows)
    {
      $this->numRows = $numRows;
      return $this;
    }

    /**
     * @return Occupancy[]
     */
    public function getOccupancies()
    {
      return $this->occupancies;
    }

    /**
     * @param Occupancy[] $occupancies
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setOccupancies(array $occupancies = null)
    {
      $this->occupancies = $occupancies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyOnline()
    {
      return $this->onlyOnline;
    }

    /**
     * @param boolean $onlyOnline
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setOnlyOnline($onlyOnline)
    {
      $this->onlyOnline = $onlyOnline;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setOrderBy($orderBy)
    {
      $this->orderBy = $orderBy;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getToPrice()
    {
      return $this->toPrice;
    }

    /**
     * @param float $toPrice
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setToPrice($toPrice)
    {
      $this->toPrice = $toPrice;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByAreaRQ
     */
    public function setAreaCode($areaCode)
    {
      $this->areaCode = $areaCode;
      return $this;
    }

}
