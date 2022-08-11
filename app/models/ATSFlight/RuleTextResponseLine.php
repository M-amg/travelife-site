<?php

namespace App\models\ATSFlight;

class RuleTextResponseLine
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
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
     * @return \App\models\ATSFlight\RuleTextResponseLine
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \App\models\ATSFlight\RuleTextResponseLine
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
