<?php

namespace App\models\ATSFlight;

class BookResponsePassenger
{

    /**
     * @var int $APISErrorCode
     */
    protected $APISErrorCode = null;

    /**
     * @var string $APISErrorText
     */
    protected $APISErrorText = null;

    /**
     * @var CalculationResponseData $CalcInfo
     */
    protected $CalcInfo = null;

    /**
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var ArrayOfTaxDetail $DetailedTaxes
     */
    protected $DetailedTaxes = null;

    /**
     * @var string $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var SharedPrice $EquivalentPassengerFare
     */
    protected $EquivalentPassengerFare = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var SharedPrice $PassengerFare
     */
    protected $PassengerFare = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var ArrayOfDetailedPaymentMethod $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var SharedPrice $QSurcharge
     */
    protected $QSurcharge = null;

    /**
     * @var ArrayOfBookResponseSeatReservation $SeatReservations
     */
    protected $SeatReservations = null;

    /**
     * @var ArrayOfBookResponseTicketData $TicketSegments
     */
    protected $TicketSegments = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var string $TourCode
     */
    protected $TourCode = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAPISErrorCode()
    {
      return $this->APISErrorCode;
    }

    /**
     * @param int $APISErrorCode
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setAPISErrorCode($APISErrorCode)
    {
      $this->APISErrorCode = $APISErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAPISErrorText()
    {
      return $this->APISErrorText;
    }

    /**
     * @param string $APISErrorText
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setAPISErrorText($APISErrorText)
    {
      $this->APISErrorText = $APISErrorText;
      return $this;
    }

    /**
     * @return CalculationResponseData
     */
    public function getCalcInfo()
    {
      return $this->CalcInfo;
    }

    /**
     * @param CalculationResponseData $CalcInfo
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setCalcInfo($CalcInfo)
    {
      $this->CalcInfo = $CalcInfo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDOB()
    {
      if ($this->DOB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DOB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DOB
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setDOB(\DateTime $DOB = null)
    {
      if ($DOB == null) {
       $this->DOB = null;
      } else {
        $this->DOB = $DOB->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getDetailedTaxes()
    {
      return $this->DetailedTaxes;
    }

    /**
     * @param ArrayOfTaxDetail $DetailedTaxes
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setDetailedTaxes($DetailedTaxes)
    {
      $this->DetailedTaxes = $DetailedTaxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param string $Endorsement
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPassengerFare()
    {
      return $this->EquivalentPassengerFare;
    }

    /**
     * @param SharedPrice $EquivalentPassengerFare
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setEquivalentPassengerFare($EquivalentPassengerFare)
    {
      $this->EquivalentPassengerFare = $EquivalentPassengerFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
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
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setPassengerFare($PassengerFare)
    {
      $this->PassengerFare = $PassengerFare;
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
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return ArrayOfDetailedPaymentMethod
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param ArrayOfDetailedPaymentMethod $PaymentMethods
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getQSurcharge()
    {
      return $this->QSurcharge;
    }

    /**
     * @param SharedPrice $QSurcharge
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setQSurcharge($QSurcharge)
    {
      $this->QSurcharge = $QSurcharge;
      return $this;
    }

    /**
     * @return ArrayOfBookResponseSeatReservation
     */
    public function getSeatReservations()
    {
      return $this->SeatReservations;
    }

    /**
     * @param ArrayOfBookResponseSeatReservation $SeatReservations
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setSeatReservations($SeatReservations)
    {
      $this->SeatReservations = $SeatReservations;
      return $this;
    }

    /**
     * @return ArrayOfBookResponseTicketData
     */
    public function getTicketSegments()
    {
      return $this->TicketSegments;
    }

    /**
     * @param ArrayOfBookResponseTicketData $TicketSegments
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setTicketSegments($TicketSegments)
    {
      $this->TicketSegments = $TicketSegments;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\BookResponsePassenger
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
