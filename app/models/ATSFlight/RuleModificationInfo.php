<?php

namespace App\models\ATSFlight;

class RuleModificationInfo
{

    /**
     * @var boolean $OriginDestinationChanged
     */
    protected $OriginDestinationChanged = null;

    /**
     * @var ArrayOfRuleInfo $UsedRule
     */
    protected $UsedRule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getOriginDestinationChanged()
    {
      return $this->OriginDestinationChanged;
    }

    /**
     * @param boolean $OriginDestinationChanged
     * @return \App\models\ATSFlight\RuleModificationInfo
     */
    public function setOriginDestinationChanged($OriginDestinationChanged)
    {
      $this->OriginDestinationChanged = $OriginDestinationChanged;
      return $this;
    }

    /**
     * @return ArrayOfRuleInfo
     */
    public function getUsedRule()
    {
      return $this->UsedRule;
    }

    /**
     * @param ArrayOfRuleInfo $UsedRule
     * @return \App\models\ATSFlight\RuleModificationInfo
     */
    public function setUsedRule($UsedRule)
    {
      $this->UsedRule = $UsedRule;
      return $this;
    }

}
