<?php

namespace App\models\hotelAPI\Hotels;

class PaxRQ
{

    /**
     * @var int $age
     */
    protected $age = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $nationality
     */
    protected $nationality = null;

    /**
     * @var string $residenceCountry
     */
    protected $residenceCountry = null;

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
     * @return \App\models\hotelAPI\Hotels\PaxRQ
     */
    public function setAge($age)
    {
      $this->age = $age;
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
     * @return \App\models\hotelAPI\Hotels\PaxRQ
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
      return $this->nationality;
    }

    /**
     * @param string $nationality
     * @return \App\models\hotelAPI\Hotels\PaxRQ
     */
    public function setNationality($nationality)
    {
      $this->nationality = $nationality;
      return $this;
    }

    /**
     * @return string
     */
    public function getResidenceCountry()
    {
      return $this->residenceCountry;
    }

    /**
     * @param string $residenceCountry
     * @return \App\models\hotelAPI\Hotels\PaxRQ
     */
    public function setResidenceCountry($residenceCountry)
    {
      $this->residenceCountry = $residenceCountry;
      return $this;
    }

}
