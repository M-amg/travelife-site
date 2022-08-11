<?php

namespace App\models\ATSFlight;

class RaisedException
{

    /**
     * @var CRS $CRSProfile
     */
    protected $CRSProfile = null;

    /**
     * @var string $ExceptionCode
     */
    protected $ExceptionCode = null;

    /**
     * @var string $ExceptionText
     */
    protected $ExceptionText = null;

    /**
     * @var string $ExtendedTransactionID
     */
    protected $ExtendedTransactionID = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var string $SourceIP
     */
    protected $SourceIP = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRS
     */
    public function getCRSProfile()
    {
      return $this->CRSProfile;
    }

    /**
     * @param CRS $CRSProfile
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setCRSProfile($CRSProfile)
    {
      $this->CRSProfile = $CRSProfile;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionCode()
    {
      return $this->ExceptionCode;
    }

    /**
     * @param string $ExceptionCode
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setExceptionCode($ExceptionCode)
    {
      $this->ExceptionCode = $ExceptionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionText()
    {
      return $this->ExceptionText;
    }

    /**
     * @param string $ExceptionText
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setExceptionText($ExceptionText)
    {
      $this->ExceptionText = $ExceptionText;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtendedTransactionID()
    {
      return $this->ExtendedTransactionID;
    }

    /**
     * @param string $ExtendedTransactionID
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setExtendedTransactionID($ExtendedTransactionID)
    {
      $this->ExtendedTransactionID = $ExtendedTransactionID;
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
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceIP()
    {
      return $this->SourceIP;
    }

    /**
     * @param string $SourceIP
     * @return \App\models\ATSFlight\RaisedException
     */
    public function setSourceIP($SourceIP)
    {
      $this->SourceIP = $SourceIP;
      return $this;
    }

}
