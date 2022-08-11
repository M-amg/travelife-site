<?php

namespace App\models\ATSFlight;

class TaxRequestPassenger
{

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var SharedPrice $PassengerFare
     */
    protected $PassengerFare = null;

    /**
     * @var PassengerTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param PassengerTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->DateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \App\models\ATSFlight\TaxRequestPassenger
     */
    public function setDateOfBirth(\DateTime $DateOfBirth = null)
    {
      if ($DateOfBirth == null) {
       $this->DateOfBirth = null;
      } else {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPassengerFare()
    {
      return $this->PassengerFare;
    }

    /**
     * @param SharedPrice $PassengerFare
     * @return \App\models\ATSFlight\TaxRequestPassenger
     */
    public function setPassengerFare($PassengerFare)
    {
      $this->PassengerFare = $PassengerFare;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PassengerTypeEnum $Type
     * @return \App\models\ATSFlight\TaxRequestPassenger
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
