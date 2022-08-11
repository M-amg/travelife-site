<?php

namespace App\models\ATSFlight;

class OSIRequestData
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
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    
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
     * @return \App\models\ATSFlight\OSIRequestData
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
     * @return \App\models\ATSFlight\OSIRequestData
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
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
     * @return \App\models\ATSFlight\OSIRequestData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

}
