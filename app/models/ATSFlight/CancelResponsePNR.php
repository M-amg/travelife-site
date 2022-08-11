<?php

namespace App\models\ATSFlight;

class CancelResponsePNR
{

    /**
     * @var string $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @var string $CustomerReferenceNumber
     */
    protected $CustomerReferenceNumber = null;

    /**
     * @var SharedPrice $EquivalentTotalPrice
     */
    protected $EquivalentTotalPrice = null;

    /**
     * @var string $FileKey
     */
    protected $FileKey = null;

    /**
     * @var ArrayOfCommonResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var string $OnlineCheckinLink
     */
    protected $OnlineCheckinLink = null;

    /**
     * @var ArrayOfCommonResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var CommonBookSurcharges $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var SharedPrice $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var string $WebFareConfirmationPage
     */
    protected $WebFareConfirmationPage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param string $AdditionalInformation
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber()
    {
      return $this->CustomerReferenceNumber;
    }

    /**
     * @param string $CustomerReferenceNumber
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setCustomerReferenceNumber($CustomerReferenceNumber)
    {
      $this->CustomerReferenceNumber = $CustomerReferenceNumber;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalPrice()
    {
      return $this->EquivalentTotalPrice;
    }

    /**
     * @param SharedPrice $EquivalentTotalPrice
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setEquivalentTotalPrice($EquivalentTotalPrice)
    {
      $this->EquivalentTotalPrice = $EquivalentTotalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileKey()
    {
      return $this->FileKey;
    }

    /**
     * @param string $FileKey
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setFileKey($FileKey)
    {
      $this->FileKey = $FileKey;
      return $this;
    }

    /**
     * @return ArrayOfCommonResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfCommonResponseLeg $Legs
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnlineCheckinLink()
    {
      return $this->OnlineCheckinLink;
    }

    /**
     * @param string $OnlineCheckinLink
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setOnlineCheckinLink($OnlineCheckinLink)
    {
      $this->OnlineCheckinLink = $OnlineCheckinLink;
      return $this;
    }

    /**
     * @return ArrayOfCommonResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfCommonResponsePassenger $Passengers
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param string $Queue
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return CommonBookSurcharges
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param CommonBookSurcharges $Surcharges
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param SharedPrice $TotalPrice
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebFareConfirmationPage()
    {
      return $this->WebFareConfirmationPage;
    }

    /**
     * @param string $WebFareConfirmationPage
     * @return \App\models\ATSFlight\CancelResponsePNR
     */
    public function setWebFareConfirmationPage($WebFareConfirmationPage)
    {
      $this->WebFareConfirmationPage = $WebFareConfirmationPage;
      return $this;
    }

}
