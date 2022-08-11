<?php

namespace App\models\ATSFlight;

class EntryClient
{

    /**
     * @var int $CalcGroup
     */
    protected $CalcGroup = null;

    /**
     * @var string $Link
     */
    protected $Link = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCalcGroup()
    {
      return $this->CalcGroup;
    }

    /**
     * @param int $CalcGroup
     * @return \App\models\ATSFlight\EntryClient
     */
    public function setCalcGroup($CalcGroup)
    {
      $this->CalcGroup = $CalcGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
      return $this->Link;
    }

    /**
     * @param string $Link
     * @return \App\models\ATSFlight\EntryClient
     */
    public function setLink($Link)
    {
      $this->Link = $Link;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \App\models\ATSFlight\EntryClient
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
