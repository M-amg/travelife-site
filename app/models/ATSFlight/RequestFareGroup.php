<?php

namespace App\models\ATSFlight;

class RequestFareGroup
{

    /**
     * @var ArrayOfstring $BookingClasses
     */
    protected $BookingClasses = null;

    /**
     * @var ClassTypeEnum $CabinClasses
     */
    protected $CabinClasses = null;

    /**
     * @var ArrayOfstring $Carriers
     */
    protected $Carriers = null;

    /**
     * @var FareRestrictionEnum $FareRestrictions
     */
    protected $FareRestrictions = null;

    /**
     * @var GDSFareTypeEnum $GDSFareTypes
     */
    protected $GDSFareTypes = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var ArrayOfRequestFareTypeFareBase $TypeFareBases
     */
    protected $TypeFareBases = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getBookingClasses()
    {
      return $this->BookingClasses;
    }

    /**
     * @param ArrayOfstring $BookingClasses
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setBookingClasses($BookingClasses)
    {
      $this->BookingClasses = $BookingClasses;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClasses()
    {
      return $this->CabinClasses;
    }

    /**
     * @param ClassTypeEnum $CabinClasses
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setCabinClasses($CabinClasses)
    {
      $this->CabinClasses = $CabinClasses;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfstring $Carriers
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return FareRestrictionEnum
     */
    public function getFareRestrictions()
    {
      return $this->FareRestrictions;
    }

    /**
     * @param FareRestrictionEnum $FareRestrictions
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setFareRestrictions($FareRestrictions)
    {
      $this->FareRestrictions = $FareRestrictions;
      return $this;
    }

    /**
     * @return GDSFareTypeEnum
     */
    public function getGDSFareTypes()
    {
      return $this->GDSFareTypes;
    }

    /**
     * @param GDSFareTypeEnum $GDSFareTypes
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setGDSFareTypes($GDSFareTypes)
    {
      $this->GDSFareTypes = $GDSFareTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return ArrayOfRequestFareTypeFareBase
     */
    public function getTypeFareBases()
    {
      return $this->TypeFareBases;
    }

    /**
     * @param ArrayOfRequestFareTypeFareBase $TypeFareBases
     * @return \App\models\ATSFlight\RequestFareGroup
     */
    public function setTypeFareBases($TypeFareBases)
    {
      $this->TypeFareBases = $TypeFareBases;
      return $this;
    }

}
