<?php

namespace App\models\ATSFlight;

class BookingClasses
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var ClassTypeEnum $CabinClassName
     */
    protected $CabinClassName = null;

    /**
     * @var int $FreeSeats
     */
    protected $FreeSeats = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\BookingClasses
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \App\models\ATSFlight\BookingClasses
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClassName()
    {
      return $this->CabinClassName;
    }

    /**
     * @param ClassTypeEnum $CabinClassName
     * @return \App\models\ATSFlight\BookingClasses
     */
    public function setCabinClassName($CabinClassName)
    {
      $this->CabinClassName = $CabinClassName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFreeSeats()
    {
      return $this->FreeSeats;
    }

    /**
     * @param int $FreeSeats
     * @return \App\models\ATSFlight\BookingClasses
     */
    public function setFreeSeats($FreeSeats)
    {
      $this->FreeSeats = $FreeSeats;
      return $this;
    }

}
