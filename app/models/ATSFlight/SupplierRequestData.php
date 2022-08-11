<?php

namespace App\models\ATSFlight;

class SupplierRequestData
{

    /**
     * @var string $Filter
     */
    protected $Filter = null;

    /**
     * @var boolean $ReturnAll
     */
    protected $ReturnAll = null;

    /**
     * @var boolean $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var boolean $ReturnFileDate
     */
    protected $ReturnFileDate = null;

    /**
     * @var boolean $ReturnFileSize
     */
    protected $ReturnFileSize = null;

    /**
     * @var boolean $ReturnName
     */
    protected $ReturnName = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param string $Filter
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnAll()
    {
      return $this->ReturnAll;
    }

    /**
     * @param boolean $ReturnAll
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setReturnAll($ReturnAll)
    {
      $this->ReturnAll = $ReturnAll;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnCode()
    {
      return $this->ReturnCode;
    }

    /**
     * @param boolean $ReturnCode
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFileDate()
    {
      return $this->ReturnFileDate;
    }

    /**
     * @param boolean $ReturnFileDate
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setReturnFileDate($ReturnFileDate)
    {
      $this->ReturnFileDate = $ReturnFileDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFileSize()
    {
      return $this->ReturnFileSize;
    }

    /**
     * @param boolean $ReturnFileSize
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setReturnFileSize($ReturnFileSize)
    {
      $this->ReturnFileSize = $ReturnFileSize;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnName()
    {
      return $this->ReturnName;
    }

    /**
     * @param boolean $ReturnName
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setReturnName($ReturnName)
    {
      $this->ReturnName = $ReturnName;
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
     * @return \App\models\ATSFlight\SupplierRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
