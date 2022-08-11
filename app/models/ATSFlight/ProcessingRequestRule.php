<?php

namespace App\models\ATSFlight;

class ProcessingRequestRule
{

    /**
     * @var CancelModeEnum $CancelMode
     */
    protected $CancelMode = null;

    /**
     * @var ConfirmModeEnum $ConfirmMode
     */
    protected $ConfirmMode = null;

    /**
     * @var duration $TimeWindow
     */
    protected $TimeWindow = null;

    /**
     * @param CancelModeEnum $CancelMode
     * @param ConfirmModeEnum $ConfirmMode
     */
    public function __construct($CancelMode, $ConfirmMode)
    {
      $this->CancelMode = $CancelMode;
      $this->ConfirmMode = $ConfirmMode;
    }

    /**
     * @return CancelModeEnum
     */
    public function getCancelMode()
    {
      return $this->CancelMode;
    }

    /**
     * @param CancelModeEnum $CancelMode
     * @return \App\models\ATSFlight\ProcessingRequestRule
     */
    public function setCancelMode($CancelMode)
    {
      $this->CancelMode = $CancelMode;
      return $this;
    }

    /**
     * @return ConfirmModeEnum
     */
    public function getConfirmMode()
    {
      return $this->ConfirmMode;
    }

    /**
     * @param ConfirmModeEnum $ConfirmMode
     * @return \App\models\ATSFlight\ProcessingRequestRule
     */
    public function setConfirmMode($ConfirmMode)
    {
      $this->ConfirmMode = $ConfirmMode;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTimeWindow()
    {
      return $this->TimeWindow;
    }

    /**
     * @param duration $TimeWindow
     * @return \App\models\ATSFlight\ProcessingRequestRule
     */
    public function setTimeWindow($TimeWindow)
    {
      $this->TimeWindow = $TimeWindow;
      return $this;
    }

}
