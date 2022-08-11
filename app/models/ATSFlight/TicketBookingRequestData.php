<?php

namespace App\models\ATSFlight;

class TicketBookingRequestData
{

    /**
     * @var ArrayOfTicketBookingRequestAdvanced $AdvancedTicketDetails
     */
    protected $AdvancedTicketDetails = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var IssueFareTypeEnum $IssueFareType
     */
    protected $IssueFareType = null;

    /**
     * @var string $PassengerLastName
     */
    protected $PassengerLastName = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var boolean $RequestGDSItinerary
     */
    protected $RequestGDSItinerary = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var TicketBookingRequestIssue $TicketIssueDetails
     */
    protected $TicketIssueDetails = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return ArrayOfTicketBookingRequestAdvanced
     */
    public function getAdvancedTicketDetails()
    {
      return $this->AdvancedTicketDetails;
    }

    /**
     * @param ArrayOfTicketBookingRequestAdvanced $AdvancedTicketDetails
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setAdvancedTicketDetails($AdvancedTicketDetails)
    {
      $this->AdvancedTicketDetails = $AdvancedTicketDetails;
      return $this;
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return IssueFareTypeEnum
     */
    public function getIssueFareType()
    {
      return $this->IssueFareType;
    }

    /**
     * @param IssueFareTypeEnum $IssueFareType
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setIssueFareType($IssueFareType)
    {
      $this->IssueFareType = $IssueFareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerLastName()
    {
      return $this->PassengerLastName;
    }

    /**
     * @param string $PassengerLastName
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setPassengerLastName($PassengerLastName)
    {
      $this->PassengerLastName = $PassengerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequestGDSItinerary()
    {
      return $this->RequestGDSItinerary;
    }

    /**
     * @param boolean $RequestGDSItinerary
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setRequestGDSItinerary($RequestGDSItinerary)
    {
      $this->RequestGDSItinerary = $RequestGDSItinerary;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return TicketBookingRequestIssue
     */
    public function getTicketIssueDetails()
    {
      return $this->TicketIssueDetails;
    }

    /**
     * @param TicketBookingRequestIssue $TicketIssueDetails
     * @return \App\models\ATSFlight\TicketBookingRequestData
     */
    public function setTicketIssueDetails($TicketIssueDetails)
    {
      $this->TicketIssueDetails = $TicketIssueDetails;
      return $this;
    }

}
