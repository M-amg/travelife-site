<?php

namespace App\models\ATSFlight;

class ProcessResponseStatus
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var TaskTypeEnum $Task
     */
    protected $Task = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $UsedActionID
     */
    protected $UsedActionID = null;

    
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
     * @return \App\models\ATSFlight\ProcessResponseStatus
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return TaskTypeEnum
     */
    public function getTask()
    {
      return $this->Task;
    }

    /**
     * @param TaskTypeEnum $Task
     * @return \App\models\ATSFlight\ProcessResponseStatus
     */
    public function setTask($Task)
    {
      $this->Task = $Task;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\ProcessResponseStatus
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedActionID()
    {
      return $this->UsedActionID;
    }

    /**
     * @param string $UsedActionID
     * @return \App\models\ATSFlight\ProcessResponseStatus
     */
    public function setUsedActionID($UsedActionID)
    {
      $this->UsedActionID = $UsedActionID;
      return $this;
    }

}
