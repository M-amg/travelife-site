<?php

namespace App\models\ATSFlight;

class TicketBookingRequestPaxText
{

    /**
     * @var string $Adult
     */
    protected $Adult = null;

    /**
     * @var string $Child
     */
    protected $Child = null;

    /**
     * @var string $Infant
     */
    protected $Infant = null;

    /**
     * @var boolean $OverwriteIfExist
     */
    protected $OverwriteIfExist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdult()
    {
      return $this->Adult;
    }

    /**
     * @param string $Adult
     * @return \App\models\ATSFlight\TicketBookingRequestPaxText
     */
    public function setAdult($Adult)
    {
      $this->Adult = $Adult;
      return $this;
    }

    /**
     * @return string
     */
    public function getChild()
    {
      return $this->Child;
    }

    /**
     * @param string $Child
     * @return \App\models\ATSFlight\TicketBookingRequestPaxText
     */
    public function setChild($Child)
    {
      $this->Child = $Child;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfant()
    {
      return $this->Infant;
    }

    /**
     * @param string $Infant
     * @return \App\models\ATSFlight\TicketBookingRequestPaxText
     */
    public function setInfant($Infant)
    {
      $this->Infant = $Infant;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteIfExist()
    {
      return $this->OverwriteIfExist;
    }

    /**
     * @param boolean $OverwriteIfExist
     * @return \App\models\ATSFlight\TicketBookingRequestPaxText
     */
    public function setOverwriteIfExist($OverwriteIfExist)
    {
      $this->OverwriteIfExist = $OverwriteIfExist;
      return $this;
    }

}
