<?php

namespace App\models\ATSFlight;

class SupplierData
{

    /**
     * @var \DateTime $FileDate
     */
    protected $FileDate = null;

    /**
     * @var string $FileSize
     */
    protected $FileSize = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFileDate()
    {
      if ($this->FileDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FileDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FileDate
     * @return \App\models\ATSFlight\SupplierData
     */
    public function setFileDate(\DateTime $FileDate = null)
    {
      if ($FileDate == null) {
       $this->FileDate = null;
      } else {
        $this->FileDate = $FileDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFileSize()
    {
      return $this->FileSize;
    }

    /**
     * @param string $FileSize
     * @return \App\models\ATSFlight\SupplierData
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \App\models\ATSFlight\SupplierData
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return \App\models\ATSFlight\SupplierData
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

}
