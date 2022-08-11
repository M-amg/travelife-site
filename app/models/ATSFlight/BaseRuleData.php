<?php

namespace App\models\ATSFlight;

class BaseRuleData
{

    /**
     * @var int $Hierarchy
     */
    protected $Hierarchy = null;

    /**
     * @var boolean $Inactive
     */
    protected $Inactive = null;

    /**
     * @var string $RuleGUID
     */
    protected $RuleGUID = null;

    /**
     * @var string $RuleName
     */
    protected $RuleName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getHierarchy()
    {
      return $this->Hierarchy;
    }

    /**
     * @param int $Hierarchy
     * @return \App\models\ATSFlight\BaseRuleData
     */
    public function setHierarchy($Hierarchy)
    {
      $this->Hierarchy = $Hierarchy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->Inactive;
    }

    /**
     * @param boolean $Inactive
     * @return \App\models\ATSFlight\BaseRuleData
     */
    public function setInactive($Inactive)
    {
      $this->Inactive = $Inactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleGUID()
    {
      return $this->RuleGUID;
    }

    /**
     * @param string $RuleGUID
     * @return \App\models\ATSFlight\BaseRuleData
     */
    public function setRuleGUID($RuleGUID)
    {
      $this->RuleGUID = $RuleGUID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param string $RuleName
     * @return \App\models\ATSFlight\BaseRuleData
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

}
