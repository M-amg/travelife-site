<?php

namespace App\models\hotelAPI\Basket;

class GetOccupationRS
{

    /**
     * @var int $adults
     */
    protected $adults = null;

    /**
     * @var int $babies
     */
    protected $babies = null;

    /**
     * @var int $children
     */
    protected $children = null;

    /**
     * @var Amount $price
     */
    protected $price = null;

    /**
     * @var string $transferType
     */
    protected $transferType = null;

    /**
     * @var VehicleInfo $vehicle
     */
    protected $vehicle = null;

    /**
     * @param int $adults
     * @param int $babies
     * @param int $children
     */
    public function __construct($adults, $babies, $children)
    {
      $this->adults = $adults;
      $this->babies = $babies;
      $this->children = $children;
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
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
     */
    public function setAdults($adults)
    {
      $this->adults = $adults;
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
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
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
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
     */
    public function setChildren($children)
    {
      $this->children = $children;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param Amount $price
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferType()
    {
      return $this->transferType;
    }

    /**
     * @param string $transferType
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
     */
    public function setTransferType($transferType)
    {
      $this->transferType = $transferType;
      return $this;
    }

    /**
     * @return VehicleInfo
     */
    public function getVehicle()
    {
      return $this->vehicle;
    }

    /**
     * @param VehicleInfo $vehicle
     * @return \App\models\hotelAPI\Basket\GetOccupationRS
     */
    public function setVehicle($vehicle)
    {
      $this->vehicle = $vehicle;
      return $this;
    }

}
