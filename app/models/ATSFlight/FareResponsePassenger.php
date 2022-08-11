<?php

namespace App\models\ATSFlight;

class FareResponsePassenger extends ResponsePassengerPrices
{

    /**
     * @var int $CalcType
     */
    protected $CalcType = null;

    /**
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var FareResponseETicket $ElectronicTicket
     */
    protected $ElectronicTicket = null;

    /**
     * @var FareTypeData $FareTypeDetails
     */
    protected $FareTypeDetails = null;

    /**
     * @var FareResponsePTicket $PaperTicket
     */
    protected $PaperTicket = null;

    /**
     * @var string $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var boolean $PassengerTypeChanged
     */
    protected $PassengerTypeChanged = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    /**
     * @var ArrayOfstring $SegmentReferences
     */
    protected $SegmentReferences = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getCalcType()
    {
      return $this->CalcType;
    }

    /**
     * @param int $CalcType
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setCalcType($CalcType)
    {
      $this->CalcType = $CalcType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDOB()
    {
      if ($this->DOB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DOB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DOB
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setDOB(\DateTime $DOB = null)
    {
      if ($DOB == null) {
       $this->DOB = null;
      } else {
        $this->DOB = $DOB->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return FareResponseETicket
     */
    public function getElectronicTicket()
    {
      return $this->ElectronicTicket;
    }

    /**
     * @param FareResponseETicket $ElectronicTicket
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setElectronicTicket($ElectronicTicket)
    {
      $this->ElectronicTicket = $ElectronicTicket;
      return $this;
    }

    /**
     * @return FareTypeData
     */
    public function getFareTypeDetails()
    {
      return $this->FareTypeDetails;
    }

    /**
     * @param FareTypeData $FareTypeDetails
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setFareTypeDetails($FareTypeDetails)
    {
      $this->FareTypeDetails = $FareTypeDetails;
      return $this;
    }

    /**
     * @return FareResponsePTicket
     */
    public function getPaperTicket()
    {
      return $this->PaperTicket;
    }

    /**
     * @param FareResponsePTicket $PaperTicket
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setPaperTicket($PaperTicket)
    {
      $this->PaperTicket = $PaperTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param string $PassengerType
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassengerTypeChanged()
    {
      return $this->PassengerTypeChanged;
    }

    /**
     * @param boolean $PassengerTypeChanged
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setPassengerTypeChanged($PassengerTypeChanged)
    {
      $this->PassengerTypeChanged = $PassengerTypeChanged;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerTypeName()
    {
      return $this->PassengerTypeName;
    }

    /**
     * @param PassengerTypeEnum $PassengerTypeName
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSegmentReferences()
    {
      return $this->SegmentReferences;
    }

    /**
     * @param ArrayOfstring $SegmentReferences
     * @return \App\models\ATSFlight\FareResponsePassenger
     */
    public function setSegmentReferences($SegmentReferences)
    {
      $this->SegmentReferences = $SegmentReferences;
      return $this;
    }

}
