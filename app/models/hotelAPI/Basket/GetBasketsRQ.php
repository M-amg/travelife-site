<?php

namespace App\models\hotelAPI\Basket;

class GetBasketsRQ
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
     * @var string $basketId
     */
    protected $basketId = null;

    /**
     * @var \DateTime $fromConfirmDate
     */
    protected $fromConfirmDate = null;

    /**
     * @var \DateTime $fromLastUpdateDate
     */
    protected $fromLastUpdateDate = null;

    /**
     * @var int $fromRow
     */
    protected $fromRow = null;

    /**
     * @var \DateTime $fromServiceStart
     */
    protected $fromServiceStart = null;

    /**
     * @var int $numRows
     */
    protected $numRows = null;

    /**
     * @var string[] $statuses
     */
    protected $statuses = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    /**
     * @var \DateTime $toConfirmDate
     */
    protected $toConfirmDate = null;

    /**
     * @var \DateTime $toLastUpdateDate
     */
    protected $toLastUpdateDate = null;

    /**
     * @var \DateTime $toServiceStart
     */
    protected $toServiceStart = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var string $wasOnRequest
     */
    protected $wasOnRequest = null;

    /**
     * @var string $yourReference
     */
    protected $yourReference = null;

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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBasketId()
    {
      return $this->basketId;
    }

    /**
     * @param string $basketId
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setBasketId($basketId)
    {
      $this->basketId = $basketId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromConfirmDate()
    {
      if ($this->fromConfirmDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromConfirmDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromConfirmDate
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setFromConfirmDate(\DateTime $fromConfirmDate = null)
    {
      if ($fromConfirmDate == null) {
       $this->fromConfirmDate = null;
      } else {
        $this->fromConfirmDate = $fromConfirmDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromLastUpdateDate()
    {
      if ($this->fromLastUpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromLastUpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromLastUpdateDate
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setFromLastUpdateDate(\DateTime $fromLastUpdateDate = null)
    {
      if ($fromLastUpdateDate == null) {
       $this->fromLastUpdateDate = null;
      } else {
        $this->fromLastUpdateDate = $fromLastUpdateDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setFromRow($fromRow)
    {
      $this->fromRow = $fromRow;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromServiceStart()
    {
      if ($this->fromServiceStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromServiceStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromServiceStart
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setFromServiceStart(\DateTime $fromServiceStart = null)
    {
      if ($fromServiceStart == null) {
       $this->fromServiceStart = null;
      } else {
        $this->fromServiceStart = $fromServiceStart->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setNumRows($numRows)
    {
      $this->numRows = $numRows;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getStatuses()
    {
      return $this->statuses;
    }

    /**
     * @param string[] $statuses
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setStatuses(array $statuses = null)
    {
      $this->statuses = $statuses;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitular()
    {
      return $this->titular;
    }

    /**
     * @param string $titular
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToConfirmDate()
    {
      if ($this->toConfirmDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toConfirmDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toConfirmDate
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setToConfirmDate(\DateTime $toConfirmDate = null)
    {
      if ($toConfirmDate == null) {
       $this->toConfirmDate = null;
      } else {
        $this->toConfirmDate = $toConfirmDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToLastUpdateDate()
    {
      if ($this->toLastUpdateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toLastUpdateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toLastUpdateDate
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setToLastUpdateDate(\DateTime $toLastUpdateDate = null)
    {
      if ($toLastUpdateDate == null) {
       $this->toLastUpdateDate = null;
      } else {
        $this->toLastUpdateDate = $toLastUpdateDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToServiceStart()
    {
      if ($this->toServiceStart == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toServiceStart);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toServiceStart
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setToServiceStart(\DateTime $toServiceStart = null)
    {
      if ($toServiceStart == null) {
       $this->toServiceStart = null;
      } else {
        $this->toServiceStart = $toServiceStart->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWasOnRequest()
    {
      return $this->wasOnRequest;
    }

    /**
     * @param string $wasOnRequest
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setWasOnRequest($wasOnRequest)
    {
      $this->wasOnRequest = $wasOnRequest;
      return $this;
    }

    /**
     * @return string
     */
    public function getYourReference()
    {
      return $this->yourReference;
    }

    /**
     * @param string $yourReference
     * @return \App\models\hotelAPI\Basket\GetBasketsRQ
     */
    public function setYourReference($yourReference)
    {
      $this->yourReference = $yourReference;
      return $this;
    }

}
