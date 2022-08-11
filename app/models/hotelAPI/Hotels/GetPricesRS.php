<?php

namespace App\models\hotelAPI\Hotels;

class GetPricesRS
{

    /**
     * @var CancellationPrice[] $cancellationPrices
     */
    protected $cancellationPrices = null;

    /**
     * @var Comment[] $comments
     */
    protected $comments = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var Establishment $establishment
     */
    protected $establishment = null;

    /**
     * @var SupplementPrice[] $reductionPrices
     */
    protected $reductionPrices = null;

    /**
     * @var RoomPrice[] $roomPrices
     */
    protected $roomPrices = null;

    /**
     * @var SupplementPrice[] $supplementPrices
     */
    protected $supplementPrices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancellationPrice[]
     */
    public function getCancellationPrices()
    {
      return $this->cancellationPrices;
    }

    /**
     * @param CancellationPrice[] $cancellationPrices
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setCancellationPrices(array $cancellationPrices = null)
    {
      $this->cancellationPrices = $cancellationPrices;
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
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setDate(\DateTime $date = null)
    {
      if ($date == null) {
       $this->date = null;
      } else {
        $this->date = $date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Establishment
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param Establishment $establishment
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setEstablishment($establishment)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return SupplementPrice[]
     */
    public function getReductionPrices()
    {
      return $this->reductionPrices;
    }

    /**
     * @param SupplementPrice[] $reductionPrices
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setReductionPrices(array $reductionPrices = null)
    {
      $this->reductionPrices = $reductionPrices;
      return $this;
    }

    /**
     * @return RoomPrice[]
     */
    public function getRoomPrices()
    {
      return $this->roomPrices;
    }

    /**
     * @param RoomPrice[] $roomPrices
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setRoomPrices(array $roomPrices = null)
    {
      $this->roomPrices = $roomPrices;
      return $this;
    }

    /**
     * @return SupplementPrice[]
     */
    public function getSupplementPrices()
    {
      return $this->supplementPrices;
    }

    /**
     * @param SupplementPrice[] $supplementPrices
     * @return \App\models\hotelAPI\Hotels\GetPricesRS
     */
    public function setSupplementPrices(array $supplementPrices = null)
    {
      $this->supplementPrices = $supplementPrices;
      return $this;
    }

}
