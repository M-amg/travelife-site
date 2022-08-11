<?php

namespace App\models\ATSFlight;

class APISDetails
{

    /**
     * @var APISAddressTypeEnum $APISAddressType
     */
    protected $APISAddressType = null;

    /**
     * @var APISPassportTypeEnum $APISPassportType
     */
    protected $APISPassportType = null;

    /**
     * @var APISVisaTypeEnum $APISVisaType
     */
    protected $APISVisaType = null;

    /**
     * @var string $AddressDetails
     */
    protected $AddressDetails = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $Gender
     */
    protected $Gender = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var string $Nationality
     */
    protected $Nationality = null;

    /**
     * @var string $PassportCountry
     */
    protected $PassportCountry = null;

    /**
     * @var \DateTime $PassportExpiryDate
     */
    protected $PassportExpiryDate = null;

    /**
     * @var boolean $PassportHolder
     */
    protected $PassportHolder = null;

    /**
     * @var \DateTime $PassportIssueDate
     */
    protected $PassportIssueDate = null;

    /**
     * @var string $PassportNumber
     */
    protected $PassportNumber = null;

    /**
     * @var string $PlaceOfBirth
     */
    protected $PlaceOfBirth = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $VisaAppliedCountry
     */
    protected $VisaAppliedCountry = null;

    /**
     * @var \DateTime $VisaDateOfIssue
     */
    protected $VisaDateOfIssue = null;

    /**
     * @var string $VisaNumber
     */
    protected $VisaNumber = null;

    /**
     * @var string $VisaPlaceOfIssue
     */
    protected $VisaPlaceOfIssue = null;

    /**
     * @var string $ZIP
     */
    protected $ZIP = null;

    /**
     * @param \DateTime $DateOfBirth
     */
    public function __construct(\DateTime $DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
    }

    /**
     * @return APISAddressTypeEnum
     */
    public function getAPISAddressType()
    {
      return $this->APISAddressType;
    }

    /**
     * @param APISAddressTypeEnum $APISAddressType
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setAPISAddressType($APISAddressType)
    {
      $this->APISAddressType = $APISAddressType;
      return $this;
    }

    /**
     * @return APISPassportTypeEnum
     */
    public function getAPISPassportType()
    {
      return $this->APISPassportType;
    }

    /**
     * @param APISPassportTypeEnum $APISPassportType
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setAPISPassportType($APISPassportType)
    {
      $this->APISPassportType = $APISPassportType;
      return $this;
    }

    /**
     * @return APISVisaTypeEnum
     */
    public function getAPISVisaType()
    {
      return $this->APISVisaType;
    }

    /**
     * @param APISVisaTypeEnum $APISVisaType
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setAPISVisaType($APISVisaType)
    {
      $this->APISVisaType = $APISVisaType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressDetails()
    {
      return $this->AddressDetails;
    }

    /**
     * @param string $AddressDetails
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setAddressDetails($AddressDetails)
    {
      $this->AddressDetails = $AddressDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setDateOfBirth(\DateTime $DateOfBirth)
    {
      $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
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
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param string $Gender
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
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
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
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
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassportCountry()
    {
      return $this->PassportCountry;
    }

    /**
     * @param string $PassportCountry
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPassportCountry($PassportCountry)
    {
      $this->PassportCountry = $PassportCountry;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPassportExpiryDate()
    {
      if ($this->PassportExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PassportExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PassportExpiryDate
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPassportExpiryDate(\DateTime $PassportExpiryDate = null)
    {
      if ($PassportExpiryDate == null) {
       $this->PassportExpiryDate = null;
      } else {
        $this->PassportExpiryDate = $PassportExpiryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassportHolder()
    {
      return $this->PassportHolder;
    }

    /**
     * @param boolean $PassportHolder
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPassportHolder($PassportHolder)
    {
      $this->PassportHolder = $PassportHolder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPassportIssueDate()
    {
      if ($this->PassportIssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PassportIssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PassportIssueDate
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPassportIssueDate(\DateTime $PassportIssueDate = null)
    {
      if ($PassportIssueDate == null) {
       $this->PassportIssueDate = null;
      } else {
        $this->PassportIssueDate = $PassportIssueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber()
    {
      return $this->PassportNumber;
    }

    /**
     * @param string $PassportNumber
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPassportNumber($PassportNumber)
    {
      $this->PassportNumber = $PassportNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlaceOfBirth()
    {
      return $this->PlaceOfBirth;
    }

    /**
     * @param string $PlaceOfBirth
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setPlaceOfBirth($PlaceOfBirth)
    {
      $this->PlaceOfBirth = $PlaceOfBirth;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisaAppliedCountry()
    {
      return $this->VisaAppliedCountry;
    }

    /**
     * @param string $VisaAppliedCountry
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setVisaAppliedCountry($VisaAppliedCountry)
    {
      $this->VisaAppliedCountry = $VisaAppliedCountry;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getVisaDateOfIssue()
    {
      if ($this->VisaDateOfIssue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VisaDateOfIssue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VisaDateOfIssue
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setVisaDateOfIssue(\DateTime $VisaDateOfIssue = null)
    {
      if ($VisaDateOfIssue == null) {
       $this->VisaDateOfIssue = null;
      } else {
        $this->VisaDateOfIssue = $VisaDateOfIssue->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getVisaNumber()
    {
      return $this->VisaNumber;
    }

    /**
     * @param string $VisaNumber
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setVisaNumber($VisaNumber)
    {
      $this->VisaNumber = $VisaNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisaPlaceOfIssue()
    {
      return $this->VisaPlaceOfIssue;
    }

    /**
     * @param string $VisaPlaceOfIssue
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setVisaPlaceOfIssue($VisaPlaceOfIssue)
    {
      $this->VisaPlaceOfIssue = $VisaPlaceOfIssue;
      return $this;
    }

    /**
     * @return string
     */
    public function getZIP()
    {
      return $this->ZIP;
    }

    /**
     * @param string $ZIP
     * @return \App\models\ATSFlight\APISDetails
     */
    public function setZIP($ZIP)
    {
      $this->ZIP = $ZIP;
      return $this;
    }

}
