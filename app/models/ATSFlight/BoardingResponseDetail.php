<?php

namespace App\models\ATSFlight;

class BoardingResponseDetail
{

    /**
     * @var boolean $AllowSMSNotification
     */
    protected $AllowSMSNotification = null;

    /**
     * @var ArrayOfBoardingResponseBaggageDetail $Baggages
     */
    protected $Baggages = null;

    /**
     * @var SurchargeData $CheckInFee
     */
    protected $CheckInFee = null;

    /**
     * @var CheckInEnum $CheckInType
     */
    protected $CheckInType = null;

    /**
     * @var SurchargeData $HandBaggageFee
     */
    protected $HandBaggageFee = null;

    /**
     * @var LegIndexEnum $LegIndex
     */
    protected $LegIndex = null;

    /**
     * @var ArrayOfint $LegSelection
     */
    protected $LegSelection = null;

    /**
     * @var SurchargeData $SMSNotificationFee
     */
    protected $SMSNotificationFee = null;

    /**
     * @var boolean $SameCheckinForAllPassenger
     */
    protected $SameCheckinForAllPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllowSMSNotification()
    {
      return $this->AllowSMSNotification;
    }

    /**
     * @param boolean $AllowSMSNotification
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setAllowSMSNotification($AllowSMSNotification)
    {
      $this->AllowSMSNotification = $AllowSMSNotification;
      return $this;
    }

    /**
     * @return ArrayOfBoardingResponseBaggageDetail
     */
    public function getBaggages()
    {
      return $this->Baggages;
    }

    /**
     * @param ArrayOfBoardingResponseBaggageDetail $Baggages
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setBaggages($Baggages)
    {
      $this->Baggages = $Baggages;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getCheckInFee()
    {
      return $this->CheckInFee;
    }

    /**
     * @param SurchargeData $CheckInFee
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setCheckInFee($CheckInFee)
    {
      $this->CheckInFee = $CheckInFee;
      return $this;
    }

    /**
     * @return CheckInEnum
     */
    public function getCheckInType()
    {
      return $this->CheckInType;
    }

    /**
     * @param CheckInEnum $CheckInType
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setCheckInType($CheckInType)
    {
      $this->CheckInType = $CheckInType;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getHandBaggageFee()
    {
      return $this->HandBaggageFee;
    }

    /**
     * @param SurchargeData $HandBaggageFee
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setHandBaggageFee($HandBaggageFee)
    {
      $this->HandBaggageFee = $HandBaggageFee;
      return $this;
    }

    /**
     * @return LegIndexEnum
     */
    public function getLegIndex()
    {
      return $this->LegIndex;
    }

    /**
     * @param LegIndexEnum $LegIndex
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setLegIndex($LegIndex)
    {
      $this->LegIndex = $LegIndex;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getLegSelection()
    {
      return $this->LegSelection;
    }

    /**
     * @param ArrayOfint $LegSelection
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setLegSelection($LegSelection)
    {
      $this->LegSelection = $LegSelection;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getSMSNotificationFee()
    {
      return $this->SMSNotificationFee;
    }

    /**
     * @param SurchargeData $SMSNotificationFee
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setSMSNotificationFee($SMSNotificationFee)
    {
      $this->SMSNotificationFee = $SMSNotificationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameCheckinForAllPassenger()
    {
      return $this->SameCheckinForAllPassenger;
    }

    /**
     * @param boolean $SameCheckinForAllPassenger
     * @return \App\models\ATSFlight\BoardingResponseDetail
     */
    public function setSameCheckinForAllPassenger($SameCheckinForAllPassenger)
    {
      $this->SameCheckinForAllPassenger = $SameCheckinForAllPassenger;
      return $this;
    }

}
