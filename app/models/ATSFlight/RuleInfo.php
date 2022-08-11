<?php

namespace App\models\ATSFlight;

class RuleInfo
{

    /**
     * @var boolean $Exclude
     */
    protected $Exclude = null;

    /**
     * @var string $MultiChannelBranch
     */
    protected $MultiChannelBranch = null;

    /**
     * @var string $MultiChannelBranchGroup
     */
    protected $MultiChannelBranchGroup = null;

    /**
     * @var string $UsedRuleID
     */
    protected $UsedRuleID = null;

    /**
     * @var string $UsedRuleName
     */
    protected $UsedRuleName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getExclude()
    {
      return $this->Exclude;
    }

    /**
     * @param boolean $Exclude
     * @return \App\models\ATSFlight\RuleInfo
     */
    public function setExclude($Exclude)
    {
      $this->Exclude = $Exclude;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranch()
    {
      return $this->MultiChannelBranch;
    }

    /**
     * @param string $MultiChannelBranch
     * @return \App\models\ATSFlight\RuleInfo
     */
    public function setMultiChannelBranch($MultiChannelBranch)
    {
      $this->MultiChannelBranch = $MultiChannelBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranchGroup()
    {
      return $this->MultiChannelBranchGroup;
    }

    /**
     * @param string $MultiChannelBranchGroup
     * @return \App\models\ATSFlight\RuleInfo
     */
    public function setMultiChannelBranchGroup($MultiChannelBranchGroup)
    {
      $this->MultiChannelBranchGroup = $MultiChannelBranchGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedRuleID()
    {
      return $this->UsedRuleID;
    }

    /**
     * @param string $UsedRuleID
     * @return \App\models\ATSFlight\RuleInfo
     */
    public function setUsedRuleID($UsedRuleID)
    {
      $this->UsedRuleID = $UsedRuleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedRuleName()
    {
      return $this->UsedRuleName;
    }

    /**
     * @param string $UsedRuleName
     * @return \App\models\ATSFlight\RuleInfo
     */
    public function setUsedRuleName($UsedRuleName)
    {
      $this->UsedRuleName = $UsedRuleName;
      return $this;
    }

}
