<?php

namespace App\models\hotelAPI\Commons;

class VehiclesTypes
{

    /**
     * @var string $carName
     */
    protected $carName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $id
     */
    protected $id = null;

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
    public function getCarName()
    {
      return $this->carName;
    }

    /**
     * @param string $carName
     * @return \App\models\hotelAPI\Commons\VehiclesTypes
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
     * @return \App\models\hotelAPI\Commons\VehiclesTypes
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \App\models\hotelAPI\Commons\VehiclesTypes
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \App\models\hotelAPI\Commons\VehiclesTypes
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
     * @return \App\models\hotelAPI\Commons\VehiclesTypes
     */
    public function setNumPassenger($numPassenger)
    {
      $this->numPassenger = $numPassenger;
      return $this;
    }

}
