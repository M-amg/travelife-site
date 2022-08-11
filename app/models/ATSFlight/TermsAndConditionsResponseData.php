<?php

namespace App\models\ATSFlight;

class TermsAndConditionsResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfstring $TermsAndConditionLinks
     */
    protected $TermsAndConditionLinks = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\TermsAndConditionsResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
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
     * @return \App\models\ATSFlight\TermsAndConditionsResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\TermsAndConditionsResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTermsAndConditionLinks()
    {
      return $this->TermsAndConditionLinks;
    }

    /**
     * @param ArrayOfstring $TermsAndConditionLinks
     * @return \App\models\ATSFlight\TermsAndConditionsResponseData
     */
    public function setTermsAndConditionLinks($TermsAndConditionLinks)
    {
      $this->TermsAndConditionLinks = $TermsAndConditionLinks;
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
     * @return \App\models\ATSFlight\TermsAndConditionsResponseData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
