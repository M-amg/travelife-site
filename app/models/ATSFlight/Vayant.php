<?php

namespace App\models\ATSFlight;

class Vayant
{

    /**
     * @var string $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var string $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param string $AgencyID
     * @return \App\models\ATSFlight\Vayant
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param string $IATANumber
     * @return \App\models\ATSFlight\Vayant
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param string $PointOfSale
     * @return \App\models\ATSFlight\Vayant
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
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
     * @return \App\models\ATSFlight\Vayant
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \App\models\ATSFlight\Vayant
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
