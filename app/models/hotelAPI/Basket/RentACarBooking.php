<?php

namespace App\models\hotelAPI\Basket;

class RentACarBooking
{

    /**
     * @var Basket $basket
     */
    protected $basket = null;

    /**
     * @var \DateTime $cancellationDate
     */
    protected $cancellationDate = null;

    /**
     * @var CancellationTerm[] $cancellationTerms
     */
    protected $cancellationTerms = null;

    /**
     * @var Comment[] $comments
     */
    protected $comments = null;

    /**
     * @var Commision $commision
     */
    protected $commision = null;

    /**
     * @var string $contractId
     */
    protected $contractId = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var HandlingFee[] $handlingFees
     */
    protected $handlingFees = null;

    /**
     * @var \DateTime $okDate
     */
    protected $okDate = null;

    /**
     * @var string $pointOfSaleId
     */
    protected $pointOfSaleId = null;

    /**
     * @var int $positionInBasket
     */
    protected $positionInBasket = null;

    /**
     * @var \DateTime $requestDate
     */
    protected $requestDate = null;

    /**
     * @var string $serviceId
     */
    protected $serviceId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var Amount $total
     */
    protected $total = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var ValuationLine[] $valuationLines
     */
    protected $valuationLines = null;

    /**
     * @var string $voucherUrl
     */
    protected $voucherUrl = null;

    /**
     * @var CarDetails $carInfo
     */
    protected $carInfo = null;

    /**
     * @var CheckDetails $checkin
     */
    protected $checkin = null;

    /**
     * @var CheckDetails $checkout
     */
    protected $checkout = null;

    /**
     * @var Driver $driver
     */
    protected $driver = null;

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      $this->positionInBasket = $positionInBasket;
    }

    /**
     * @return Basket
     */
    public function getBasket()
    {
      return $this->basket;
    }

    /**
     * @param Basket $basket
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setBasket($basket)
    {
      $this->basket = $basket;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancellationDate()
    {
      if ($this->cancellationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->cancellationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $cancellationDate
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCancellationDate(\DateTime $cancellationDate = null)
    {
      if ($cancellationDate == null) {
       $this->cancellationDate = null;
      } else {
        $this->cancellationDate = $cancellationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return CancellationTerm[]
     */
    public function getCancellationTerms()
    {
      return $this->cancellationTerms;
    }

    /**
     * @param CancellationTerm[] $cancellationTerms
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCancellationTerms(array $cancellationTerms = null)
    {
      $this->cancellationTerms = $cancellationTerms;
      return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param Comment[] $comments
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return Commision
     */
    public function getCommision()
    {
      return $this->commision;
    }

    /**
     * @param Commision $commision
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCommision($commision)
    {
      $this->commision = $commision;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractId()
    {
      return $this->contractId;
    }

    /**
     * @param string $contractId
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setContractId($contractId)
    {
      $this->contractId = $contractId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return HandlingFee[]
     */
    public function getHandlingFees()
    {
      return $this->handlingFees;
    }

    /**
     * @param HandlingFee[] $handlingFees
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setHandlingFees(array $handlingFees = null)
    {
      $this->handlingFees = $handlingFees;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOkDate()
    {
      if ($this->okDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->okDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $okDate
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setOkDate(\DateTime $okDate = null)
    {
      if ($okDate == null) {
       $this->okDate = null;
      } else {
        $this->okDate = $okDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionInBasket()
    {
      return $this->positionInBasket;
    }

    /**
     * @param int $positionInBasket
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setPositionInBasket($positionInBasket)
    {
      $this->positionInBasket = $positionInBasket;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestDate()
    {
      if ($this->requestDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->requestDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $requestDate
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setRequestDate(\DateTime $requestDate = null)
    {
      if ($requestDate == null) {
       $this->requestDate = null;
      } else {
        $this->requestDate = $requestDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param string $serviceId
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
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
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param Amount $total
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return ValuationLine[]
     */
    public function getValuationLines()
    {
      return $this->valuationLines;
    }

    /**
     * @param ValuationLine[] $valuationLines
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setValuationLines(array $valuationLines = null)
    {
      $this->valuationLines = $valuationLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoucherUrl()
    {
      return $this->voucherUrl;
    }

    /**
     * @param string $voucherUrl
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setVoucherUrl($voucherUrl)
    {
      $this->voucherUrl = $voucherUrl;
      return $this;
    }

    /**
     * @return CarDetails
     */
    public function getCarInfo()
    {
      return $this->carInfo;
    }

    /**
     * @param CarDetails $carInfo
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCarInfo($carInfo)
    {
      $this->carInfo = $carInfo;
      return $this;
    }

    /**
     * @return CheckDetails
     */
    public function getCheckin()
    {
      return $this->checkin;
    }

    /**
     * @param CheckDetails $checkin
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCheckin($checkin)
    {
      $this->checkin = $checkin;
      return $this;
    }

    /**
     * @return CheckDetails
     */
    public function getCheckout()
    {
      return $this->checkout;
    }

    /**
     * @param CheckDetails $checkout
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setCheckout($checkout)
    {
      $this->checkout = $checkout;
      return $this;
    }

    /**
     * @return Driver
     */
    public function getDriver()
    {
      return $this->driver;
    }

    /**
     * @param Driver $driver
     * @return \App\models\hotelAPI\Basket\RentACarBooking
     */
    public function setDriver($driver)
    {
      $this->driver = $driver;
      return $this;
    }

}
