<?php

namespace App\models\ATSFlight;

class QuoteResponseUserData
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $RuleLink
     */
    protected $RuleLink = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\QuoteResponseUserData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleLink()
    {
      return $this->RuleLink;
    }

    /**
     * @param string $RuleLink
     * @return \App\models\ATSFlight\QuoteResponseUserData
     */
    public function setRuleLink($RuleLink)
    {
      $this->RuleLink = $RuleLink;
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
     * @return \App\models\ATSFlight\QuoteResponseUserData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
