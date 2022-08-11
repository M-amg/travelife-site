<?php

namespace App\models\ATSFlight;

class PreferenceResponseData
{

    /**
     * @var ArrayOfstring $IgnoredKeywordTables
     */
    protected $IgnoredKeywordTables = null;

    /**
     * @var ArrayOfstring $IgnoredNetDBs
     */
    protected $IgnoredNetDBs = null;

    /**
     * @var ArrayOfstring $IgnoredPCCs
     */
    protected $IgnoredPCCs = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfPreferenceResponseItem $PreferenceList
     */
    protected $PreferenceList = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getIgnoredKeywordTables()
    {
      return $this->IgnoredKeywordTables;
    }

    /**
     * @param ArrayOfstring $IgnoredKeywordTables
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setIgnoredKeywordTables($IgnoredKeywordTables)
    {
      $this->IgnoredKeywordTables = $IgnoredKeywordTables;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getIgnoredNetDBs()
    {
      return $this->IgnoredNetDBs;
    }

    /**
     * @param ArrayOfstring $IgnoredNetDBs
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setIgnoredNetDBs($IgnoredNetDBs)
    {
      $this->IgnoredNetDBs = $IgnoredNetDBs;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getIgnoredPCCs()
    {
      return $this->IgnoredPCCs;
    }

    /**
     * @param ArrayOfstring $IgnoredPCCs
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setIgnoredPCCs($IgnoredPCCs)
    {
      $this->IgnoredPCCs = $IgnoredPCCs;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfPreferenceResponseItem
     */
    public function getPreferenceList()
    {
      return $this->PreferenceList;
    }

    /**
     * @param ArrayOfPreferenceResponseItem $PreferenceList
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setPreferenceList($PreferenceList)
    {
      $this->PreferenceList = $PreferenceList;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\PreferenceResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
