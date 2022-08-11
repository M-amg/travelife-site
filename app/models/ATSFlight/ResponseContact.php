<?php

namespace App\models\ATSFlight;

class ResponseContact
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
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    /**
     * @var ContactTypeEnum $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\ResponseContact
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
     * @return \App\models\ATSFlight\ResponseContact
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\models\ATSFlight\ResponseContact
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \App\models\ATSFlight\ResponseContact
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
     * @return \App\models\ATSFlight\ResponseContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
