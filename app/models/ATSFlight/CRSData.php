<?php

namespace App\models\ATSFlight;

class CRSData extends CRS
{

    /**
     * @var ForceSourceTypeEnum $ForceSourceType
     */
    protected $ForceSourceType = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var boolean $UseMultiChannel
     */
    protected $UseMultiChannel = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct();
      $this->ID = $ID;
    }

    /**
     * @return ForceSourceTypeEnum
     */
    public function getForceSourceType()
    {
      return $this->ForceSourceType;
    }

    /**
     * @param ForceSourceTypeEnum $ForceSourceType
     * @return \App\models\ATSFlight\CRSData
     */
    public function setForceSourceType($ForceSourceType)
    {
      $this->ForceSourceType = $ForceSourceType;
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
     * @return \App\models\ATSFlight\CRSData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMultiChannel()
    {
      return $this->UseMultiChannel;
    }

    /**
     * @param boolean $UseMultiChannel
     * @return \App\models\ATSFlight\CRSData
     */
    public function setUseMultiChannel($UseMultiChannel)
    {
      $this->UseMultiChannel = $UseMultiChannel;
      return $this;
    }

}
