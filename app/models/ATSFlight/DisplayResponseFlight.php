<?php

namespace App\models\ATSFlight;

class DisplayResponseFlight
{

    /**
     * @var string $CharterSource
     */
    protected $CharterSource = null;

    /**
     * @var ArrayOfDisplayResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var string $OriginalCurrency
     */
    protected $OriginalCurrency = null;

    /**
     * @var ArrayOfDisplayResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var DisplayResponseCodeValuePair $Supplier
     */
    protected $Supplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCharterSource()
    {
      return $this->CharterSource;
    }

    /**
     * @param string $CharterSource
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setCharterSource($CharterSource)
    {
      $this->CharterSource = $CharterSource;
      return $this;
    }

    /**
     * @return ArrayOfDisplayResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfDisplayResponseLeg $Legs
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalCurrency()
    {
      return $this->OriginalCurrency;
    }

    /**
     * @param string $OriginalCurrency
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setOriginalCurrency($OriginalCurrency)
    {
      $this->OriginalCurrency = $OriginalCurrency;
      return $this;
    }

    /**
     * @return ArrayOfDisplayResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfDisplayResponsePassenger $Passengers
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordset()
    {
      return $this->Recordset;
    }

    /**
     * @param string $Recordset
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param DisplayResponseCodeValuePair $Supplier
     * @return \App\models\ATSFlight\DisplayResponseFlight
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

}
