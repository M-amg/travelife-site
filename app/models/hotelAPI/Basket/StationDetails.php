<?php

namespace App\models\hotelAPI\Basket;

class StationDetails
{

    /**
     * @var string $address1
     */
    protected $address1 = null;

    /**
     * @var string $address2
     */
    protected $address2 = null;

    /**
     * @var string $areaType
     */
    protected $areaType = null;

    /**
     * @var string $cityName
     */
    protected $cityName = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $collection
     */
    protected $collection = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @var string $delivery
     */
    protected $delivery = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var OpenHours[] $openHours
     */
    protected $openHours = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param string $address1
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setAddress1($address1)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param string $address2
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setAddress2($address2)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaType()
    {
      return $this->areaType;
    }

    /**
     * @param string $areaType
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setAreaType($areaType)
    {
      $this->areaType = $areaType;
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
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setCityName($cityName)
    {
      $this->cityName = $cityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollection()
    {
      return $this->collection;
    }

    /**
     * @param string $collection
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setCollection($collection)
    {
      $this->collection = $collection;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDelivery()
    {
      return $this->delivery;
    }

    /**
     * @param string $delivery
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setDelivery($delivery)
    {
      $this->delivery = $delivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return OpenHours[]
     */
    public function getOpenHours()
    {
      return $this->openHours;
    }

    /**
     * @param OpenHours[] $openHours
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setOpenHours(array $openHours = null)
    {
      $this->openHours = $openHours;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \App\models\hotelAPI\Basket\StationDetails
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

}
