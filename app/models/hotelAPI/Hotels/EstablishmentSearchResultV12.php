<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentSearchResultV12 extends EstablishmentSearchResult
{

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @var string $picture
     */
    protected $picture = null;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude, $longitude)
    {
      parent::__construct();
      $this->latitude = $latitude;
      $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResultV12
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResultV12
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResultV12
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
      return $this->picture;
    }

    /**
     * @param string $picture
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResultV12
     */
    public function setPicture($picture)
    {
      $this->picture = $picture;
      return $this;
    }

}
