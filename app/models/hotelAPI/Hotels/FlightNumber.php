<?php

namespace App\models\hotelAPI\Hotels;

class FlightNumber
{

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $fullNumber
     */
    protected $fullNumber = null;

    /**
     * @var string $number
     */
    protected $number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return \App\models\hotelAPI\Hotels\FlightNumber
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullNumber()
    {
      return $this->fullNumber;
    }

    /**
     * @param string $fullNumber
     * @return \App\models\hotelAPI\Hotels\FlightNumber
     */
    public function setFullNumber($fullNumber)
    {
      $this->fullNumber = $fullNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \App\models\hotelAPI\Hotels\FlightNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
