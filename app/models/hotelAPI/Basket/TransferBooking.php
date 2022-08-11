<?php

namespace App\models\hotelAPI\Basket;

class TransferBooking
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
     * @var int $adults
     */
    protected $adults = null;

    /**
     * @var string $airportIATA
     */
    protected $airportIATA = null;

    /**
     * @var string $airportID
     */
    protected $airportID = null;

    /**
     * @var string $airportName
     */
    protected $airportName = null;

    /**
     * @var int $babies
     */
    protected $babies = null;

    /**
     * @var int $children
     */
    protected $children = null;

    /**
     * @var FlightInfo $flightInfo
     */
    protected $flightInfo = null;

    /**
     * @var string $hotelAddress
     */
    protected $hotelAddress = null;

    /**
     * @var string $hotelID
     */
    protected $hotelID = null;

    /**
     * @var string $hotelName
     */
    protected $hotelName = null;

    /**
     * @var GetOccupationRS[] $occupations
     */
    protected $occupations = null;

    /**
     * @var Amount $totalPrice
     */
    protected $totalPrice = null;

    /**
     * @var string $transferDirection
     */
    protected $transferDirection = null;

    /**
     * @var string $transferId
     */
    protected $transferId = null;

    /**
     * @param int $positionInBasket
     * @param int $adults
     * @param int $babies
     * @param int $children
     */
    public function __construct($positionInBasket, $adults, $babies, $children)
    {
      $this->positionInBasket = $positionInBasket;
      $this->adults = $adults;
      $this->babies = $babies;
      $this->children = $children;
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
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
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setVoucherUrl($voucherUrl)
    {
      $this->voucherUrl = $voucherUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->adults;
    }

    /**
     * @param int $adults
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setAdults($adults)
    {
      $this->adults = $adults;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportIATA()
    {
      return $this->airportIATA;
    }

    /**
     * @param string $airportIATA
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setAirportIATA($airportIATA)
    {
      $this->airportIATA = $airportIATA;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportID()
    {
      return $this->airportID;
    }

    /**
     * @param string $airportID
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setAirportID($airportID)
    {
      $this->airportID = $airportID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirportName()
    {
      return $this->airportName;
    }

    /**
     * @param string $airportName
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setAirportName($airportName)
    {
      $this->airportName = $airportName;
      return $this;
    }

    /**
     * @return int
     */
    public function getBabies()
    {
      return $this->babies;
    }

    /**
     * @param int $babies
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setBabies($babies)
    {
      $this->babies = $babies;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
      return $this->children;
    }

    /**
     * @param int $children
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

    /**
     * @return FlightInfo
     */
    public function getFlightInfo()
    {
      return $this->flightInfo;
    }

    /**
     * @param FlightInfo $flightInfo
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setFlightInfo($flightInfo)
    {
      $this->flightInfo = $flightInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelAddress()
    {
      return $this->hotelAddress;
    }

    /**
     * @param string $hotelAddress
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setHotelAddress($hotelAddress)
    {
      $this->hotelAddress = $hotelAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelID()
    {
      return $this->hotelID;
    }

    /**
     * @param string $hotelID
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setHotelID($hotelID)
    {
      $this->hotelID = $hotelID;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->hotelName;
    }

    /**
     * @param string $hotelName
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setHotelName($hotelName)
    {
      $this->hotelName = $hotelName;
      return $this;
    }

    /**
     * @return GetOccupationRS[]
     */
    public function getOccupations()
    {
      return $this->occupations;
    }

    /**
     * @param GetOccupationRS[] $occupations
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setOccupations(array $occupations = null)
    {
      $this->occupations = $occupations;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getTotalPrice()
    {
      return $this->totalPrice;
    }

    /**
     * @param Amount $totalPrice
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setTotalPrice($totalPrice)
    {
      $this->totalPrice = $totalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferDirection()
    {
      return $this->transferDirection;
    }

    /**
     * @param string $transferDirection
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setTransferDirection($transferDirection)
    {
      $this->transferDirection = $transferDirection;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferId()
    {
      return $this->transferId;
    }

    /**
     * @param string $transferId
     * @return \App\models\hotelAPI\Basket\TransferBooking
     */
    public function setTransferId($transferId)
    {
      $this->transferId = $transferId;
      return $this;
    }

}
