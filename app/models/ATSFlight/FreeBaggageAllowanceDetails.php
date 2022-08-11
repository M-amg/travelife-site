<?php

namespace App\models\ATSFlight;

class FreeBaggageAllowanceDetails
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
     * @return \App\models\ATSFlight\FreeBaggageAllowanceDetails
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
     * @return \App\models\ATSFlight\FreeBaggageAllowanceDetails
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
     * @return \App\models\ATSFlight\FreeBaggageAllowanceDetails
     */
    public function setInfant($Infant)
    {
      $this->Infant = $Infant;
      return $this;
    }

}
