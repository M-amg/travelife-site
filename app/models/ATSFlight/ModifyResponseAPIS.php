<?php

namespace App\models\ATSFlight;

class ModifyResponseAPIS
{

    /**
     * @var string $APIS
     */
    protected $APIS = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var ArrayOfint $Segments
     */
    protected $Segments = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAPIS()
    {
      return $this->APIS;
    }

    /**
     * @param string $APIS
     * @return \App\models\ATSFlight\ModifyResponseAPIS
     */
    public function setAPIS($APIS)
    {
      $this->APIS = $APIS;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponseAPIS
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
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
     * @return \App\models\ATSFlight\ModifyResponseAPIS
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponseAPIS
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
