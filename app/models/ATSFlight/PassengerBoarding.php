<?php

namespace App\models\ATSFlight;

class PassengerBoarding
{

    /**
     * @var int $BaggagePieces
     */
    protected $BaggagePieces = null;

    /**
     * @var int $BaggageWeight
     */
    protected $BaggageWeight = null;

    /**
     * @var CheckInEnum $CheckInType
     */
    protected $CheckInType = null;

    /**
     * @var int $FullSizeHandBaggage
     */
    protected $FullSizeHandBaggage = null;

    /**
     * @var boolean $IsPriorityBoarding
     */
    protected $IsPriorityBoarding = null;

    /**
     * @var LegIndexEnum $LegIndex
     */
    protected $LegIndex = null;

    /**
     * @param int $BaggagePieces
     * @param CheckInEnum $CheckInType
     */
    public function __construct($BaggagePieces, $CheckInType)
    {
      $this->BaggagePieces = $BaggagePieces;
      $this->CheckInType = $CheckInType;
    }

    /**
     * @return int
     */
    public function getBaggagePieces()
    {
      return $this->BaggagePieces;
    }

    /**
     * @param int $BaggagePieces
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setBaggagePieces($BaggagePieces)
    {
      $this->BaggagePieces = $BaggagePieces;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaggageWeight()
    {
      return $this->BaggageWeight;
    }

    /**
     * @param int $BaggageWeight
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setBaggageWeight($BaggageWeight)
    {
      $this->BaggageWeight = $BaggageWeight;
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
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setCheckInType($CheckInType)
    {
      $this->CheckInType = $CheckInType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFullSizeHandBaggage()
    {
      return $this->FullSizeHandBaggage;
    }

    /**
     * @param int $FullSizeHandBaggage
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setFullSizeHandBaggage($FullSizeHandBaggage)
    {
      $this->FullSizeHandBaggage = $FullSizeHandBaggage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPriorityBoarding()
    {
      return $this->IsPriorityBoarding;
    }

    /**
     * @param boolean $IsPriorityBoarding
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setIsPriorityBoarding($IsPriorityBoarding)
    {
      $this->IsPriorityBoarding = $IsPriorityBoarding;
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
     * @return \App\models\ATSFlight\PassengerBoarding
     */
    public function setLegIndex($LegIndex)
    {
      $this->LegIndex = $LegIndex;
      return $this;
    }

}
