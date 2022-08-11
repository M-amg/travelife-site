<?php

namespace App\models\ATSFlight;

class Contact
{

    /**
     * @var string $AdditionalStreet1
     */
    protected $AdditionalStreet1 = null;

    /**
     * @var string $AdditionalStreet2
     */
    protected $AdditionalStreet2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $ContactID
     */
    protected $ContactID = null;

    /**
     * @var AddContactTypeEnum $ContactType
     */
    protected $ContactType = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

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
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfPhoneDetails $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var string $Region
     */
    protected $Region = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdditionalStreet1()
    {
      return $this->AdditionalStreet1;
    }

    /**
     * @param string $AdditionalStreet1
     * @return \App\models\ATSFlight\Contact
     */
    public function setAdditionalStreet1($AdditionalStreet1)
    {
      $this->AdditionalStreet1 = $AdditionalStreet1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalStreet2()
    {
      return $this->AdditionalStreet2;
    }

    /**
     * @param string $AdditionalStreet2
     * @return \App\models\ATSFlight\Contact
     */
    public function setAdditionalStreet2($AdditionalStreet2)
    {
      $this->AdditionalStreet2 = $AdditionalStreet2;
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
     * @return \App\models\ATSFlight\Contact
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \App\models\ATSFlight\Contact
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param string $ContactID
     * @return \App\models\ATSFlight\Contact
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

    /**
     * @return AddContactTypeEnum
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param AddContactTypeEnum $ContactType
     * @return \App\models\ATSFlight\Contact
     */
    public function setContactType($ContactType)
    {
      $this->ContactType = $ContactType;
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
     * @return \App\models\ATSFlight\Contact
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \App\models\ATSFlight\Contact
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return \App\models\ATSFlight\Contact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return \App\models\ATSFlight\Contact
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
     * @return \App\models\ATSFlight\Contact
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
     * @return \App\models\ATSFlight\Contact
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
     * @return \App\models\ATSFlight\Contact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\models\ATSFlight\Contact
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfPhoneDetails
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfPhoneDetails $PhoneNumbers
     * @return \App\models\ATSFlight\Contact
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param string $Region
     * @return \App\models\ATSFlight\Contact
     */
    public function setRegion($Region)
    {
      $this->Region = $Region;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \App\models\ATSFlight\Contact
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
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
     * @return \App\models\ATSFlight\Contact
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \App\models\ATSFlight\Contact
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \App\models\ATSFlight\Contact
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

}
