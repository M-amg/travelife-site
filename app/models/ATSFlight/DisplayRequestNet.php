<?php

namespace App\models\ATSFlight;

class DisplayRequestNet
{

    /**
     * @var boolean $AllowClassMix
     */
    protected $AllowClassMix = null;

    /**
     * @var \DateTime $AnticipatedBookingDate
     */
    protected $AnticipatedBookingDate = null;

    /**
     * @var string $CalcModel
     */
    protected $CalcModel = null;

    /**
     * @var CheckTaxEnum $CheckTax
     */
    protected $CheckTax = null;

    /**
     * @var int $DeterminePointOfTurnaround
     */
    protected $DeterminePointOfTurnaround = null;

    /**
     * @var boolean $IsQueryAddon
     */
    protected $IsQueryAddon = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var ArrayOfstring $NetFareCodes
     */
    protected $NetFareCodes = null;

    /**
     * @var int $NumberOfNetFares
     */
    protected $NumberOfNetFares = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @param int $NumberOfNetFares
     */
    public function __construct($NumberOfNetFares)
    {
      $this->NumberOfNetFares = $NumberOfNetFares;
    }

    /**
     * @return boolean
     */
    public function getAllowClassMix()
    {
      return $this->AllowClassMix;
    }

    /**
     * @param boolean $AllowClassMix
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setAllowClassMix($AllowClassMix)
    {
      $this->AllowClassMix = $AllowClassMix;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAnticipatedBookingDate()
    {
      if ($this->AnticipatedBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AnticipatedBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AnticipatedBookingDate
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setAnticipatedBookingDate(\DateTime $AnticipatedBookingDate = null)
    {
      if ($AnticipatedBookingDate == null) {
       $this->AnticipatedBookingDate = null;
      } else {
        $this->AnticipatedBookingDate = $AnticipatedBookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCalcModel()
    {
      return $this->CalcModel;
    }

    /**
     * @param string $CalcModel
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setCalcModel($CalcModel)
    {
      $this->CalcModel = $CalcModel;
      return $this;
    }

    /**
     * @return CheckTaxEnum
     */
    public function getCheckTax()
    {
      return $this->CheckTax;
    }

    /**
     * @param CheckTaxEnum $CheckTax
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setCheckTax($CheckTax)
    {
      $this->CheckTax = $CheckTax;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeterminePointOfTurnaround()
    {
      return $this->DeterminePointOfTurnaround;
    }

    /**
     * @param int $DeterminePointOfTurnaround
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setDeterminePointOfTurnaround($DeterminePointOfTurnaround)
    {
      $this->DeterminePointOfTurnaround = $DeterminePointOfTurnaround;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQueryAddon()
    {
      return $this->IsQueryAddon;
    }

    /**
     * @param boolean $IsQueryAddon
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setIsQueryAddon($IsQueryAddon)
    {
      $this->IsQueryAddon = $IsQueryAddon;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchCodes()
    {
      return $this->MatchCodes;
    }

    /**
     * @param ArrayOfstring $MatchCodes
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNetFareCodes()
    {
      return $this->NetFareCodes;
    }

    /**
     * @param ArrayOfstring $NetFareCodes
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setNetFareCodes($NetFareCodes)
    {
      $this->NetFareCodes = $NetFareCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNetFares()
    {
      return $this->NumberOfNetFares;
    }

    /**
     * @param int $NumberOfNetFares
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setNumberOfNetFares($NumberOfNetFares)
    {
      $this->NumberOfNetFares = $NumberOfNetFares;
      return $this;
    }

    /**
     * @return TariffSubTypeEnum
     */
    public function getTariffSubType()
    {
      return $this->TariffSubType;
    }

    /**
     * @param TariffSubTypeEnum $TariffSubType
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setTariffSubType($TariffSubType)
    {
      $this->TariffSubType = $TariffSubType;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\DisplayRequestNet
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

}
