<?php

namespace App\models\hotelAPI\Commons;

class CityHotelsByAgency
{

    /**
     * @var int $availableHotels
     */
    protected $availableHotels = null;

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;

    /**
     * @var string $cityDescription
     */
    protected $cityDescription = null;

    /**
     * @param int $availableHotels
     */
    public function __construct($availableHotels)
    {
      $this->availableHotels = $availableHotels;
    }

    /**
     * @return int
     */
    public function getAvailableHotels()
    {
      return $this->availableHotels;
    }

    /**
     * @param int $availableHotels
     * @return \App\models\hotelAPI\Commons\CityHotelsByAgency
     */
    public function setAvailableHotels($availableHotels)
    {
      $this->availableHotels = $availableHotels;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityCode()
    {
      return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return \App\models\hotelAPI\Commons\CityHotelsByAgency
     */
    public function setCityCode($cityCode)
    {
      $this->cityCode = $cityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityDescription()
    {
      return $this->cityDescription;
    }

    /**
     * @param string $cityDescription
     * @return \App\models\hotelAPI\Commons\CityHotelsByAgency
     */
    public function setCityDescription($cityDescription)
    {
      $this->cityDescription = $cityDescription;
      return $this;
    }

}
