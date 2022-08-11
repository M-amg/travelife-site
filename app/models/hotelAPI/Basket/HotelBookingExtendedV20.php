<?php

namespace App\models\hotelAPI\Basket;

class HotelBookingExtendedV20
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
     * @var \DateTime $checkin
     */
    protected $checkin = null;

    /**
     * @var \DateTime $checkout
     */
    protected $checkout = null;

    /**
     * @var string $establishmentId
     */
    protected $establishmentId = null;

    /**
     * @var ValuatedOccupationV20[] $occupations
     */
    protected $occupations = null;

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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
     */
    public function setVoucherUrl($voucherUrl)
    {
      $this->voucherUrl = $voucherUrl;
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
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
     * @return string
     */
    public function getEstablishmentId()
    {
      return $this->establishmentId;
    }

    /**
     * @param string $establishmentId
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
     */
    public function setEstablishmentId($establishmentId)
    {
      $this->establishmentId = $establishmentId;
      return $this;
    }

    /**
     * @return ValuatedOccupationV20[]
     */
    public function getOccupations()
    {
      return $this->occupations;
    }

    /**
     * @param ValuatedOccupationV20[] $occupations
     * @return \App\models\hotelAPI\Basket\HotelBookingExtendedV20
     */
    public function setOccupations(array $occupations = null)
    {
      $this->occupations = $occupations;
      return $this;
    }

}
