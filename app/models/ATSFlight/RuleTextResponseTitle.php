<?php

namespace App\models\ATSFlight;

class RuleTextResponseTitle
{

    /**
     * @var ArrayOfRuleTextResponseLine $Lines
     */
    protected $Lines = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRuleTextResponseLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfRuleTextResponseLine $Lines
     * @return \App\models\ATSFlight\RuleTextResponseTitle
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\RuleTextResponseTitle
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
