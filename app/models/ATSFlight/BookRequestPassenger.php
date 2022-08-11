<?php

namespace App\models\ATSFlight;

class BookRequestPassenger
{

    /**
     * @var ArrayOfAPISDetails $APISs
     */
    protected $APISs = null;

    /**
     * @var boolean $AssistanceRequired
     */
    protected $AssistanceRequired = null;

    /**
     * @var ArrayOfPassengerBoarding $BoardingDetails
     */
    protected $BoardingDetails = null;

    /**
     * @var string $Community
     */
    protected $Community = null;

    /**
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var FormOfIdentification $FOID
     */
    protected $FOID = null;

    /**
     * @var string $FamilyCertification
     */
    protected $FamilyCertification = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var string $FrequentFlyerAirline
     */
    protected $FrequentFlyerAirline = null;

    /**
     * @var string $FrequentFlyerNumber
     */
    protected $FrequentFlyerNumber = null;

    /**
     * @var string $FrequentFlyerType
     */
    protected $FrequentFlyerType = null;

    /**
     * @var GenderEnum $Gender
     */
    protected $Gender = null;

    /**
     * @var string $IDCardNumber
     */
    protected $IDCardNumber = null;

    /**
     * @var string $IDCardType
     */
    protected $IDCardType = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Municipality
     */
    protected $Municipality = null;

    /**
     * @var string $NameRemark
     */
    protected $NameRemark = null;

    /**
     * @var string $Nationality
     */
    protected $Nationality = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var ArrayOfstring $Remarks
     */
    protected $Remarks = null;

    /**
     * @var ArrayOfstring $SSRs
     */
    protected $SSRs = null;

    /**
     * @var ArrayOfBookRequestSeatData $SeatReservations
     */
    protected $SeatReservations = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $VATNumber
     */
    protected $VATNumber = null;

    /**
     * @param GenderEnum $Gender
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($Gender, $PassengerType)
    {
      $this->Gender = $Gender;
      $this->PassengerType = $PassengerType;
    }

    /**
     * @return ArrayOfAPISDetails
     */
    public function getAPISs()
    {
      return $this->APISs;
    }

    /**
     * @param ArrayOfAPISDetails $APISs
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setAPISs($APISs)
    {
      $this->APISs = $APISs;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setAssistanceRequired($AssistanceRequired)
    {
      $this->AssistanceRequired = $AssistanceRequired;
      return $this;
    }

    /**
     * @return ArrayOfPassengerBoarding
     */
    public function getBoardingDetails()
    {
      return $this->BoardingDetails;
    }

    /**
     * @param ArrayOfPassengerBoarding $BoardingDetails
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setBoardingDetails($BoardingDetails)
    {
      $this->BoardingDetails = $BoardingDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommunity()
    {
      return $this->Community;
    }

    /**
     * @param string $Community
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setCommunity($Community)
    {
      $this->Community = $Community;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setDOB(\DateTime $DOB = null)
    {
      if ($DOB == null) {
       $this->DOB = null;
      } else {
        $this->DOB = $DOB->format("Y-m-d\TH:i:s");
      }
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setFOID($FOID)
    {
      $this->FOID = $FOID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamilyCertification()
    {
      return $this->FamilyCertification;
    }

    /**
     * @param string $FamilyCertification
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setFamilyCertification($FamilyCertification)
    {
      $this->FamilyCertification = $FamilyCertification;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setFrequentFlyerNumber($FrequentFlyerNumber)
    {
      $this->FrequentFlyerNumber = $FrequentFlyerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrequentFlyerType()
    {
      return $this->FrequentFlyerType;
    }

    /**
     * @param string $FrequentFlyerType
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setFrequentFlyerType($FrequentFlyerType)
    {
      $this->FrequentFlyerType = $FrequentFlyerType;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getIDCardNumber()
    {
      return $this->IDCardNumber;
    }

    /**
     * @param string $IDCardNumber
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setIDCardNumber($IDCardNumber)
    {
      $this->IDCardNumber = $IDCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIDCardType()
    {
      return $this->IDCardType;
    }

    /**
     * @param string $IDCardType
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setIDCardType($IDCardType)
    {
      $this->IDCardType = $IDCardType;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMunicipality()
    {
      return $this->Municipality;
    }

    /**
     * @param string $Municipality
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setMunicipality($Municipality)
    {
      $this->Municipality = $Municipality;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setNameRemark($NameRemark)
    {
      $this->NameRemark = $NameRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param string $Nationality
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSSRs()
    {
      return $this->SSRs;
    }

    /**
     * @param ArrayOfstring $SSRs
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestSeatData
     */
    public function getSeatReservations()
    {
      return $this->SeatReservations;
    }

    /**
     * @param ArrayOfBookRequestSeatData $SeatReservations
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setSeatReservations($SeatReservations)
    {
      $this->SeatReservations = $SeatReservations;
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
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATNumber()
    {
      return $this->VATNumber;
    }

    /**
     * @param string $VATNumber
     * @return \App\models\ATSFlight\BookRequestPassenger
     */
    public function setVATNumber($VATNumber)
    {
      $this->VATNumber = $VATNumber;
      return $this;
    }

}
