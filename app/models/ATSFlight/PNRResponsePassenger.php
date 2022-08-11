<?php

namespace App\models\ATSFlight;

class PNRResponsePassenger
{

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var boolean $AssistanceRequired
     */
    protected $AssistanceRequired = null;

    /**
     * @var string $CustomerNameData
     */
    protected $CustomerNameData = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var SharedPrice $EquivalentPrice
     */
    protected $EquivalentPrice = null;

    /**
     * @var SharedPrice $EquivalentTax
     */
    protected $EquivalentTax = null;

    /**
     * @var FormOfIdentification $FOID
     */
    protected $FOID = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FrequentFlyerAirline
     */
    protected $FrequentFlyerAirline = null;

    /**
     * @var string $FrequentFlyerNumber
     */
    protected $FrequentFlyerNumber = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NameRemark
     */
    protected $NameRemark = null;

    /**
     * @var string $OriginalPassengerNumber
     */
    protected $OriginalPassengerNumber = null;

    /**
     * @var ArrayOfPNRResponseOSI $Osi
     */
    protected $Osi = null;

    /**
     * @var int $PassengerNumber
     */
    protected $PassengerNumber = null;

    /**
     * @var string $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var string $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    /**
     * @var SharedPrice $Price
     */
    protected $Price = null;

    /**
     * @var ArrayOfstring $Remarks
     */
    protected $Remarks = null;

    /**
     * @var ArrayOfPNRResponseSK $SKElements
     */
    protected $SKElements = null;

    /**
     * @var ArrayOfPNRResponseSeatPreferrence $SeatPreferences
     */
    protected $SeatPreferences = null;

    /**
     * @var ArrayOfPNRResponseSSR $SpecialServiceRequests
     */
    protected $SpecialServiceRequests = null;

    /**
     * @var SharedPrice $Tax
     */
    protected $Tax = null;

    /**
     * @var ArrayOfPNRResponseTKNO $TicketNumbers
     */
    protected $TicketNumbers = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAssistanceRequired()
    {
      return $this->AssistanceRequired;
    }

    /**
     * @param boolean $AssistanceRequired
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setAssistanceRequired($AssistanceRequired)
    {
      $this->AssistanceRequired = $AssistanceRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNameData()
    {
      return $this->CustomerNameData;
    }

    /**
     * @param string $CustomerNameData
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setCustomerNameData($CustomerNameData)
    {
      $this->CustomerNameData = $CustomerNameData;
      return $this;
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
     * @return \App\models\ATSFlight\PNRResponsePassenger
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
    public function getEquivalentPrice()
    {
      return $this->EquivalentPrice;
    }

    /**
     * @param SharedPrice $EquivalentPrice
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setEquivalentPrice($EquivalentPrice)
    {
      $this->EquivalentPrice = $EquivalentPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTax()
    {
      return $this->EquivalentTax;
    }

    /**
     * @param SharedPrice $EquivalentTax
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setEquivalentTax($EquivalentTax)
    {
      $this->EquivalentTax = $EquivalentTax;
      return $this;
    }

    /**
     * @return FormOfIdentification
     */
    public function getFOID()
    {
      return $this->FOID;
    }

    /**
     * @param FormOfIdentification $FOID
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setFOID($FOID)
    {
      $this->FOID = $FOID;
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
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequentFlyerAirline()
    {
      return $this->FrequentFlyerAirline;
    }

    /**
     * @param string $FrequentFlyerAirline
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setFrequentFlyerAirline($FrequentFlyerAirline)
    {
      $this->FrequentFlyerAirline = $FrequentFlyerAirline;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequentFlyerNumber()
    {
      return $this->FrequentFlyerNumber;
    }

    /**
     * @param string $FrequentFlyerNumber
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setFrequentFlyerNumber($FrequentFlyerNumber)
    {
      $this->FrequentFlyerNumber = $FrequentFlyerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameRemark()
    {
      return $this->NameRemark;
    }

    /**
     * @param string $NameRemark
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setNameRemark($NameRemark)
    {
      $this->NameRemark = $NameRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalPassengerNumber()
    {
      return $this->OriginalPassengerNumber;
    }

    /**
     * @param string $OriginalPassengerNumber
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setOriginalPassengerNumber($OriginalPassengerNumber)
    {
      $this->OriginalPassengerNumber = $OriginalPassengerNumber;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseOSI
     */
    public function getOsi()
    {
      return $this->Osi;
    }

    /**
     * @param ArrayOfPNRResponseOSI $Osi
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setOsi($Osi)
    {
      $this->Osi = $Osi;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerNumber()
    {
      return $this->PassengerNumber;
    }

    /**
     * @param int $PassengerNumber
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setPassengerNumber($PassengerNumber)
    {
      $this->PassengerNumber = $PassengerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param string $PassengerType
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param string $PassengerTypeCode
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerTypeName()
    {
      return $this->PassengerTypeName;
    }

    /**
     * @param PassengerTypeEnum $PassengerTypeName
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param SharedPrice $Price
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param ArrayOfstring $Remarks
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSK
     */
    public function getSKElements()
    {
      return $this->SKElements;
    }

    /**
     * @param ArrayOfPNRResponseSK $SKElements
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setSKElements($SKElements)
    {
      $this->SKElements = $SKElements;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSeatPreferrence
     */
    public function getSeatPreferences()
    {
      return $this->SeatPreferences;
    }

    /**
     * @param ArrayOfPNRResponseSeatPreferrence $SeatPreferences
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setSeatPreferences($SeatPreferences)
    {
      $this->SeatPreferences = $SeatPreferences;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSSR
     */
    public function getSpecialServiceRequests()
    {
      return $this->SpecialServiceRequests;
    }

    /**
     * @param ArrayOfPNRResponseSSR $SpecialServiceRequests
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setSpecialServiceRequests($SpecialServiceRequests)
    {
      $this->SpecialServiceRequests = $SpecialServiceRequests;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param SharedPrice $Tax
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseTKNO
     */
    public function getTicketNumbers()
    {
      return $this->TicketNumbers;
    }

    /**
     * @param ArrayOfPNRResponseTKNO $TicketNumbers
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setTicketNumbers($TicketNumbers)
    {
      $this->TicketNumbers = $TicketNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \App\models\ATSFlight\PNRResponsePassenger
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
