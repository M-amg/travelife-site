<?php

namespace App\models\ATSFlight;

class ModuleResponseContact
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var ContactTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param ContactTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \App\models\ATSFlight\ModuleResponseContact
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \App\models\ATSFlight\ModuleResponseContact
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\models\ATSFlight\ModuleResponseContact
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\ModuleResponseContact
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ContactTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ContactTypeEnum $Type
     * @return \App\models\ATSFlight\ModuleResponseContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
