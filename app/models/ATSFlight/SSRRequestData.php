<?php

namespace App\models\ATSFlight;

class SSRRequestData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $FreeText
     */
    protected $FreeText = null;

    /**
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var ArrayOfint $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\SSRRequestData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \App\models\ATSFlight\SSRRequestData
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
     * @return \App\models\ATSFlight\SSRRequestData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfint $Segments
     * @return \App\models\ATSFlight\SSRRequestData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
