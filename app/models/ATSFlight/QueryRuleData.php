<?php

namespace App\models\ATSFlight;

class QueryRuleData extends BaseRuleData
{

    /**
     * @var ArrayOfQueryActionData $Actions
     */
    protected $Actions = null;

    /**
     * @var boolean $Exclude
     */
    protected $Exclude = null;

    /**
     * @var QuerySearchCriteriaData $SearchCriteria
     */
    protected $SearchCriteria = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfQueryActionData
     */
    public function getActions()
    {
      return $this->Actions;
    }

    /**
     * @param ArrayOfQueryActionData $Actions
     * @return \App\models\ATSFlight\QueryRuleData
     */
    public function setActions($Actions)
    {
      $this->Actions = $Actions;
      return $this;
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
     * @return \App\models\ATSFlight\QueryRuleData
     */
    public function setExclude($Exclude)
    {
      $this->Exclude = $Exclude;
      return $this;
    }

    /**
     * @return QuerySearchCriteriaData
     */
    public function getSearchCriteria()
    {
      return $this->SearchCriteria;
    }

    /**
     * @param QuerySearchCriteriaData $SearchCriteria
     * @return \App\models\ATSFlight\QueryRuleData
     */
    public function setSearchCriteria($SearchCriteria)
    {
      $this->SearchCriteria = $SearchCriteria;
      return $this;
    }

}
