<?php

namespace App\models\ATSFlight;

class RuleChapter
{

    /**
     * @var string $RuleHeader
     */
    protected $RuleHeader = null;

    /**
     * @var ArrayOfstring $RuleLines
     */
    protected $RuleLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRuleHeader()
    {
      return $this->RuleHeader;
    }

    /**
     * @param string $RuleHeader
     * @return \App\models\ATSFlight\RuleChapter
     */
    public function setRuleHeader($RuleHeader)
    {
      $this->RuleHeader = $RuleHeader;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRuleLines()
    {
      return $this->RuleLines;
    }

    /**
     * @param ArrayOfstring $RuleLines
     * @return \App\models\ATSFlight\RuleChapter
     */
    public function setRuleLines($RuleLines)
    {
      $this->RuleLines = $RuleLines;
      return $this;
    }

}
