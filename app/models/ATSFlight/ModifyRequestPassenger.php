<?php

namespace App\models\ATSFlight;

class ModifyRequestPassenger
{

    /**
     * @var ArrayOfAPISDetails $APISInformation
     */
    protected $APISInformation = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var FormOfIdentification $FOID
     */
    protected $FOID = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var ArrayOfModifyRequestFF $FrequentFlyer
     */
    protected $FrequentFlyer = null;

    /**
     * @var GenderEnum $Gender
     */
    protected $Gender = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NameRemark
     */
    protected $NameRemark = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var ArrayOfModifyRequestOSI $OSI
     */
    protected $OSI = null;

    /**
     * @var ArrayOfOSIRequestData $OSIs
     */
    protected $OSIs = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var ArrayOfEnhancedRemark $Remarks
     */
    protected $Remarks = null;

    /**
     * @var ArrayOfModifyRequestSSR $SSR
     */
    protected $SSR = null;

    /**
     * @var ArrayOfSSRRequestData $SSRs
     */
    protected $SSRs = null;

    /**
     * @var ArrayOfSeatRequestData $Seats
     */
    protected $Seats = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var int $TravelsWith
     */
    protected $TravelsWith = null;

    /**
     * @param GenderEnum $Gender
     */
    public function __construct($Gender)
    {
      $this->Gender = $Gender;
    }

    /**
     * @return ArrayOfAPISDetails
     */
    public function getAPISInformation()
    {
      return $this->APISInformation;
    }

    /**
     * @param ArrayOfAPISDetails $APISInformation
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setAPISInformation($APISInformation)
    {
      $this->APISInformation = $APISInformation;
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
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
     * @return FormOfIdentification
     */
    public function getFOID()
    {
      return $this->FOID;
    }

    /**
     * @param FormOfIdentification $FOID
     * @return \App\models\ATSFlight\ModifyRequestPassenger
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestFF
     */
    public function getFrequentFlyer()
    {
      return $this->FrequentFlyer;
    }

    /**
     * @param ArrayOfModifyRequestFF $FrequentFlyer
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setFrequentFlyer($FrequentFlyer)
    {
      $this->FrequentFlyer = $FrequentFlyer;
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setNameRemark($NameRemark)
    {
      $this->NameRemark = $NameRemark;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestOSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param ArrayOfModifyRequestOSI $OSI
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return ArrayOfOSIRequestData
     */
    public function getOSIs()
    {
      return $this->OSIs;
    }

    /**
     * @param ArrayOfOSIRequestData $OSIs
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setOSIs($OSIs)
    {
      $this->OSIs = $OSIs;
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return ArrayOfEnhancedRemark
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param ArrayOfEnhancedRemark $Remarks
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestSSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param ArrayOfModifyRequestSSR $SSR
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return ArrayOfSSRRequestData
     */
    public function getSSRs()
    {
      return $this->SSRs;
    }

    /**
     * @param ArrayOfSSRRequestData $SSRs
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfSeatRequestData
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfSeatRequestData $Seats
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
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
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelsWith()
    {
      return $this->TravelsWith;
    }

    /**
     * @param int $TravelsWith
     * @return \App\models\ATSFlight\ModifyRequestPassenger
     */
    public function setTravelsWith($TravelsWith)
    {
      $this->TravelsWith = $TravelsWith;
      return $this;
    }

}
