<?php

namespace App\models\ATSFlight;

class ModifyRequestContact
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var ContactTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

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
     * @return \App\models\ATSFlight\ModifyRequestContact
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \App\models\ATSFlight\ModifyRequestContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \App\models\ATSFlight\ModifyRequestContact
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
