<?php

namespace App\models\ATSFlight;

class ProcessingRequestProcess
{

    /**
     * @var ArrayOfProcessingRequestAction $AdditionalActions
     */
    protected $AdditionalActions = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var ProcessModeEnum $Mode
     */
    protected $Mode = null;

    /**
     * @var ArrayOfProcessingRequestRule $Rules
     */
    protected $Rules = null;

    /**
     * @param int $ID
     * @param ProcessModeEnum $Mode
     */
    public function __construct($ID, $Mode)
    {
      $this->ID = $ID;
      $this->Mode = $Mode;
    }

    /**
     * @return ArrayOfProcessingRequestAction
     */
    public function getAdditionalActions()
    {
      return $this->AdditionalActions;
    }

    /**
     * @param ArrayOfProcessingRequestAction $AdditionalActions
     * @return \App\models\ATSFlight\ProcessingRequestProcess
     */
    public function setAdditionalActions($AdditionalActions)
    {
      $this->AdditionalActions = $AdditionalActions;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\models\ATSFlight\ProcessingRequestProcess
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ProcessModeEnum
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ProcessModeEnum $Mode
     * @return \App\models\ATSFlight\ProcessingRequestProcess
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return ArrayOfProcessingRequestRule
     */
    public function getRules()
    {
      return $this->Rules;
    }

    /**
     * @param ArrayOfProcessingRequestRule $Rules
     * @return \App\models\ATSFlight\ProcessingRequestProcess
     */
    public function setRules($Rules)
    {
      $this->Rules = $Rules;
      return $this;
    }

}
