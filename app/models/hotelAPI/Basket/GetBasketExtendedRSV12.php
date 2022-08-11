<?php

namespace App\models\hotelAPI\Basket;

class GetBasketExtendedRSV12
{

    /**
     * @var string $agencyCode
     */
    protected $agencyCode = null;

    /**
     * @var string $agencyReference
     */
    protected $agencyReference = null;

    /**
     * @var string $basketId
     */
    protected $basketId = null;

    /**
     * @var \DateTime $cancelled
     */
    protected $cancelled = null;

    /**
     * @var RentACarBooking[] $cars
     */
    protected $cars = null;

    /**
     * @var \DateTime $confirmed
     */
    protected $confirmed = null;

    /**
     * @var ExcursionBooking[] $excursions
     */
    protected $excursions = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var HotelBookingExtendedV12[] $hotels
     */
    protected $hotels = null;

    /**
     * @var \DateTime $opened
     */
    protected $opened = null;

    /**
     * @var string $proFormaUrl
     */
    protected $proFormaUrl = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @var Amount $total
     */
    protected $total = null;

    /**
     * @var TransferBooking[] $transfers
     */
    protected $transfers = null;

    /**
     * @var string[] $comments
     */
    protected $comments = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setAgencyCode($agencyCode)
    {
      $this->agencyCode = $agencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->agencyReference;
    }

    /**
     * @param string $agencyReference
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setAgencyReference($agencyReference)
    {
      $this->agencyReference = $agencyReference;
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
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setBasketId($basketId)
    {
      $this->basketId = $basketId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelled()
    {
      if ($this->cancelled == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->cancelled);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $cancelled
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setCancelled(\DateTime $cancelled = null)
    {
      if ($cancelled == null) {
       $this->cancelled = null;
      } else {
        $this->cancelled = $cancelled->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RentACarBooking[]
     */
    public function getCars()
    {
      return $this->cars;
    }

    /**
     * @param RentACarBooking[] $cars
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setCars(array $cars = null)
    {
      $this->cars = $cars;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConfirmed()
    {
      if ($this->confirmed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->confirmed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $confirmed
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setConfirmed(\DateTime $confirmed = null)
    {
      if ($confirmed == null) {
       $this->confirmed = null;
      } else {
        $this->confirmed = $confirmed->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ExcursionBooking[]
     */
    public function getExcursions()
    {
      return $this->excursions;
    }

    /**
     * @param ExcursionBooking[] $excursions
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setExcursions(array $excursions = null)
    {
      $this->excursions = $excursions;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setFrom(\DateTime $from = null)
    {
      if ($from == null) {
       $this->from = null;
      } else {
        $this->from = $from->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return HotelBookingExtendedV12[]
     */
    public function getHotels()
    {
      return $this->hotels;
    }

    /**
     * @param HotelBookingExtendedV12[] $hotels
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setHotels(array $hotels = null)
    {
      $this->hotels = $hotels;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpened()
    {
      if ($this->opened == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->opened);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $opened
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setOpened(\DateTime $opened = null)
    {
      if ($opened == null) {
       $this->opened = null;
      } else {
        $this->opened = $opened->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getProFormaUrl()
    {
      return $this->proFormaUrl;
    }

    /**
     * @param string $proFormaUrl
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setProFormaUrl($proFormaUrl)
    {
      $this->proFormaUrl = $proFormaUrl;
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
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $to
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setTo(\DateTime $to = null)
    {
      if ($to == null) {
       $this->to = null;
      } else {
        $this->to = $to->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return TransferBooking[]
     */
    public function getTransfers()
    {
      return $this->transfers;
    }

    /**
     * @param TransferBooking[] $transfers
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setTransfers(array $transfers = null)
    {
      $this->transfers = $transfers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string[] $comments
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRSV12
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

}
