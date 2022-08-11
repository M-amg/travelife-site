<?php

namespace App\models\hotelAPI\Hotels;

class Address
{

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var Airport[] $airports
     */
    protected $airports = null;

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;

    /**
     * @var string $cityName
     */
    protected $cityName = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $stateCode
     */
    protected $stateCode = null;

    /**
     * @var string $stateName
     */
    protected $stateName = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $zoneCode
     */
    protected $zoneCode = null;

    /**
     * @var string $zoneName
     */
    protected $zoneName = null;

    
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
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return Airport[]
     */
    public function getAirports()
    {
      return $this->airports;
    }

    /**
     * @param Airport[] $airports
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setAirports(array $airports = null)
    {
      $this->airports = $airports;
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
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setCityCode($cityCode)
    {
      $this->cityCode = $cityCode;
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
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setCityName($cityName)
    {
      $this->cityName = $cityName;
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
     * @return \App\models\hotelAPI\Hotels\Address
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
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \App\models\hotelAPI\Hotels\Address
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
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
      return $this->stateCode;
    }

    /**
     * @param string $stateCode
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setStateCode($stateCode)
    {
      $this->stateCode = $stateCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateName()
    {
      return $this->stateName;
    }

    /**
     * @param string $stateName
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setStateName($stateName)
    {
      $this->stateName = $stateName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoneCode()
    {
      return $this->zoneCode;
    }

    /**
     * @param string $zoneCode
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setZoneCode($zoneCode)
    {
      $this->zoneCode = $zoneCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoneName()
    {
      return $this->zoneName;
    }

    /**
     * @param string $zoneName
     * @return \App\models\hotelAPI\Hotels\Address
     */
    public function setZoneName($zoneName)
    {
      $this->zoneName = $zoneName;
      return $this;
    }

}
