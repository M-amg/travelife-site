<?php

namespace App\models\ATSFlight;

class BoardingResponseBaggageDetail
{

    /**
     * @var boolean $AllowPriorityBoarding
     */
    protected $AllowPriorityBoarding = null;

    /**
     * @var SurchargeData $BaggageFee
     */
    protected $BaggageFee = null;

    /**
     * @var int $MaxPieceWeight
     */
    protected $MaxPieceWeight = null;

    /**
     * @var int $NumberOfPieces
     */
    protected $NumberOfPieces = null;

    /**
     * @var boolean $PaySurchargesAtAirport
     */
    protected $PaySurchargesAtAirport = null;

    /**
     * @var SurchargeData $PriorityBoardingFee
     */
    protected $PriorityBoardingFee = null;

    /**
     * @var int $TotalMaxWeight
     */
    protected $TotalMaxWeight = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllowPriorityBoarding()
    {
      return $this->AllowPriorityBoarding;
    }

    /**
     * @param boolean $AllowPriorityBoarding
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setAllowPriorityBoarding($AllowPriorityBoarding)
    {
      $this->AllowPriorityBoarding = $AllowPriorityBoarding;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getBaggageFee()
    {
      return $this->BaggageFee;
    }

    /**
     * @param SurchargeData $BaggageFee
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setBaggageFee($BaggageFee)
    {
      $this->BaggageFee = $BaggageFee;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPieceWeight()
    {
      return $this->MaxPieceWeight;
    }

    /**
     * @param int $MaxPieceWeight
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setMaxPieceWeight($MaxPieceWeight)
    {
      $this->MaxPieceWeight = $MaxPieceWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
      return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
      $this->NumberOfPieces = $NumberOfPieces;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaySurchargesAtAirport()
    {
      return $this->PaySurchargesAtAirport;
    }

    /**
     * @param boolean $PaySurchargesAtAirport
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setPaySurchargesAtAirport($PaySurchargesAtAirport)
    {
      $this->PaySurchargesAtAirport = $PaySurchargesAtAirport;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getPriorityBoardingFee()
    {
      return $this->PriorityBoardingFee;
    }

    /**
     * @param SurchargeData $PriorityBoardingFee
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setPriorityBoardingFee($PriorityBoardingFee)
    {
      $this->PriorityBoardingFee = $PriorityBoardingFee;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalMaxWeight()
    {
      return $this->TotalMaxWeight;
    }

    /**
     * @param int $TotalMaxWeight
     * @return \App\models\ATSFlight\BoardingResponseBaggageDetail
     */
    public function setTotalMaxWeight($TotalMaxWeight)
    {
      $this->TotalMaxWeight = $TotalMaxWeight;
      return $this;
    }

}
