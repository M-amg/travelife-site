<?php

namespace App\models\hotelAPI\Basket;

class VehicleInfo
{

    /**
     * @var string $carId
     */
    protected $carId = null;

    /**
     * @var string $carName
     */
    protected $carName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @var int $numPassenger
     */
    protected $numPassenger = null;

    /**
     * @param int $numPassenger
     */
    public function __construct($numPassenger)
    {
      $this->numPassenger = $numPassenger;
    }

    /**
     * @return string
     */
    public function getCarId()
    {
      return $this->carId;
    }

    /**
     * @param string $carId
     * @return \App\models\hotelAPI\Basket\VehicleInfo
     */
    public function setCarId($carId)
    {
      $this->carId = $carId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarName()
    {
      return $this->carName;
    }

    /**
     * @param string $carName
     * @return \App\models\hotelAPI\Basket\VehicleInfo
     */
    public function setCarName($carName)
    {
      $this->carName = $carName;
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
     * @return \App\models\hotelAPI\Basket\VehicleInfo
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \App\models\hotelAPI\Basket\VehicleInfo
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumPassenger()
    {
      return $this->numPassenger;
    }

    /**
     * @param int $numPassenger
     * @return \App\models\hotelAPI\Basket\VehicleInfo
     */
    public function setNumPassenger($numPassenger)
    {
      $this->numPassenger = $numPassenger;
      return $this;
    }

}
