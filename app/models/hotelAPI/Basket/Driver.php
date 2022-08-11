<?php

namespace App\models\hotelAPI\Basket;

class Driver
{

    /**
     * @var int $age
     */
    protected $age = null;

    /**
     * @var string $countryOfResidence
     */
    protected $countryOfResidence = null;

    /**
     * @var string $driverId
     */
    protected $driverId = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @param int $age
     */
    public function __construct($age)
    {
      $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->age;
    }

    /**
     * @param int $age
     * @return \App\models\hotelAPI\Basket\Driver
     */
    public function setAge($age)
    {
      $this->age = $age;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence()
    {
      return $this->countryOfResidence;
    }

    /**
     * @param string $countryOfResidence
     * @return \App\models\hotelAPI\Basket\Driver
     */
    public function setCountryOfResidence($countryOfResidence)
    {
      $this->countryOfResidence = $countryOfResidence;
      return $this;
    }

    /**
     * @return string
     */
    public function getDriverId()
    {
      return $this->driverId;
    }

    /**
     * @param string $driverId
     * @return \App\models\hotelAPI\Basket\Driver
     */
    public function setDriverId($driverId)
    {
      $this->driverId = $driverId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \App\models\hotelAPI\Basket\Driver
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \App\models\hotelAPI\Basket\Driver
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

}
