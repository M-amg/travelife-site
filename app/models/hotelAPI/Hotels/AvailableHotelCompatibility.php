<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelCompatibility
{

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var AvailableRoom[] $availableRooms
     */
    protected $availableRooms = null;

    /**
     * @var string $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var string $cityId
     */
    protected $cityId = null;

    /**
     * @var string $cityName
     */
    protected $cityName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $establishmentId
     */
    protected $establishmentId = null;

    /**
     * @var string $establishmentName
     */
    protected $establishmentName = null;

    /**
     * @var string $imagesUrl
     */
    protected $imagesUrl = null;

    /**
     * @var string[] $remarks
     */
    protected $remarks = null;

    /**
     * @var string $web
     */
    protected $web = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return AvailableRoom[]
     */
    public function getAvailableRooms()
    {
      return $this->availableRooms;
    }

    /**
     * @param AvailableRoom[] $availableRooms
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setAvailableRooms(array $availableRooms = null)
    {
      $this->availableRooms = $availableRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param string $categoryId
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityId()
    {
      return $this->cityId;
    }

    /**
     * @param string $cityId
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setCityId($cityId)
    {
      $this->cityId = $cityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setCityName($cityName)
    {
      $this->cityName = $cityName;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setEstablishmentId($establishmentId)
    {
      $this->establishmentId = $establishmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstablishmentName()
    {
      return $this->establishmentName;
    }

    /**
     * @param string $establishmentName
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setEstablishmentName($establishmentName)
    {
      $this->establishmentName = $establishmentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getImagesUrl()
    {
      return $this->imagesUrl;
    }

    /**
     * @param string $imagesUrl
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setImagesUrl($imagesUrl)
    {
      $this->imagesUrl = $imagesUrl;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param string[] $remarks
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setRemarks(array $remarks = null)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeb()
    {
      return $this->web;
    }

    /**
     * @param string $web
     * @return \App\models\hotelAPI\Hotels\AvailableHotelCompatibility
     */
    public function setWeb($web)
    {
      $this->web = $web;
      return $this;
    }

}
