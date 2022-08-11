<?php

namespace App\models\ATSFlight;

class TicketBookingRequestPassenger
{

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var GenderEnum $Gender
     */
    protected $Gender = null;

    /**
     * @var boolean $IncludeOPC
     */
    protected $IncludeOPC = null;

    /**
     * @var IssueOptionsEnum $IssueOptions
     */
    protected $IssueOptions = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var int $PaymentSelection
     */
    protected $PaymentSelection = null;

    /**
     * @var ArrayOfTicketBookingEMD $TicketEMDs
     */
    protected $TicketEMDs = null;

    /**
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
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
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreePassengerType()
    {
      return $this->FreePassengerType;
    }

    /**
     * @param string $FreePassengerType
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
      return $this;
    }

    /**
     * @return GenderEnum
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param GenderEnum $Gender
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeOPC()
    {
      return $this->IncludeOPC;
    }

    /**
     * @param boolean $IncludeOPC
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setIncludeOPC($IncludeOPC)
    {
      $this->IncludeOPC = $IncludeOPC;
      return $this;
    }

    /**
     * @return IssueOptionsEnum
     */
    public function getIssueOptions()
    {
      return $this->IssueOptions;
    }

    /**
     * @param IssueOptionsEnum $IssueOptions
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setIssueOptions($IssueOptions)
    {
      $this->IssueOptions = $IssueOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentSelection()
    {
      return $this->PaymentSelection;
    }

    /**
     * @param int $PaymentSelection
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setPaymentSelection($PaymentSelection)
    {
      $this->PaymentSelection = $PaymentSelection;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingEMD
     */
    public function getTicketEMDs()
    {
      return $this->TicketEMDs;
    }

    /**
     * @param ArrayOfTicketBookingEMD $TicketEMDs
     * @return \App\models\ATSFlight\TicketBookingRequestPassenger
     */
    public function setTicketEMDs($TicketEMDs)
    {
      $this->TicketEMDs = $TicketEMDs;
      return $this;
    }

}
