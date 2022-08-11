<?php

namespace App\models\ATSFlight;

class ProcessingRequestAction
{

    /**
     * @var ArrayOfstring $AddOSIs
     */
    protected $AddOSIs = null;

    /**
     * @var ArrayOfstring $AddRemarks
     */
    protected $AddRemarks = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var ProcessingRequestQueue $Queue
     */
    protected $Queue = null;

    /**
     * @var ActionTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param ActionTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAddOSIs()
    {
      return $this->AddOSIs;
    }

    /**
     * @param ArrayOfstring $AddOSIs
     * @return \App\models\ATSFlight\ProcessingRequestAction
     */
    public function setAddOSIs($AddOSIs)
    {
      $this->AddOSIs = $AddOSIs;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAddRemarks()
    {
      return $this->AddRemarks;
    }

    /**
     * @param ArrayOfstring $AddRemarks
     * @return \App\models\ATSFlight\ProcessingRequestAction
     */
    public function setAddRemarks($AddRemarks)
    {
      $this->AddRemarks = $AddRemarks;
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
     * @return \App\models\ATSFlight\ProcessingRequestAction
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ProcessingRequestQueue
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param ProcessingRequestQueue $Queue
     * @return \App\models\ATSFlight\ProcessingRequestAction
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return ActionTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ActionTypeEnum $Type
     * @return \App\models\ATSFlight\ProcessingRequestAction
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
