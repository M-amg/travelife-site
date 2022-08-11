<?php

namespace App\models\ATSFlight;

class CancelRequestContactData
{

    /**
     * @var AddContactTypeEnum $ContactType
     */
    protected $ContactType = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AddContactTypeEnum
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param AddContactTypeEnum $ContactType
     * @return \App\models\ATSFlight\CancelRequestContactData
     */
    public function setContactType($ContactType)
    {
      $this->ContactType = $ContactType;
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
     * @return \App\models\ATSFlight\CancelRequestContactData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
