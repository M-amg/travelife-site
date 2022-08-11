<?php

namespace App\models\ATSFlight;

class SKRequestData
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $FreeText
     */
    protected $FreeText = null;

    /**
     * @var string $KeyWord
     */
    protected $KeyWord = null;

    /**
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var ArrayOfint $SegmentSelection
     */
    protected $SegmentSelection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\SKRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param string $FreeText
     * @return \App\models\ATSFlight\SKRequestData
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyWord()
    {
      return $this->KeyWord;
    }

    /**
     * @param string $KeyWord
     * @return \App\models\ATSFlight\SKRequestData
     */
    public function setKeyWord($KeyWord)
    {
      $this->KeyWord = $KeyWord;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param ArrayOfint $PassengerSelection
     * @return \App\models\ATSFlight\SKRequestData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentSelection()
    {
      return $this->SegmentSelection;
    }

    /**
     * @param ArrayOfint $SegmentSelection
     * @return \App\models\ATSFlight\SKRequestData
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
      return $this;
    }

}
