<?php

namespace App\models\ATSFlight;

class ModifyBookingResponseData
{

    /**
     * @var ArrayOfModuleResponseContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var ArrayOfModifyResponseFormOfPayment $FormOfPayments
     */
    protected $FormOfPayments = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfModifyResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfModifyResponseRebookSementStatus $RebookSegments
     */
    protected $RebookSegments = null;

    /**
     * @var ArrayOfModifyResponseRemark $Remark
     */
    protected $Remark = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfModifyResponseStatus $SegmentStati
     */
    protected $SegmentStati = null;

    /**
     * @var ArrayOfModifyResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfModifyResponseService $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfDiscountData $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var ArrayOfModifyResponsevfMacro $vfMacro
     */
    protected $vfMacro = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfModuleResponseContact
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfModuleResponseContact $Contacts
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseFormOfPayment
     */
    public function getFormOfPayments()
    {
      return $this->FormOfPayments;
    }

    /**
     * @param ArrayOfModifyResponseFormOfPayment $FormOfPayments
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setFormOfPayments($FormOfPayments)
    {
      $this->FormOfPayments = $FormOfPayments;
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
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfModifyResponsePassenger $Passengers
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseRebookSementStatus
     */
    public function getRebookSegments()
    {
      return $this->RebookSegments;
    }

    /**
     * @param ArrayOfModifyResponseRebookSementStatus $RebookSegments
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setRebookSegments($RebookSegments)
    {
      $this->RebookSegments = $RebookSegments;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseRemark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param ArrayOfModifyResponseRemark $Remark
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseStatus
     */
    public function getSegmentStati()
    {
      return $this->SegmentStati;
    }

    /**
     * @param ArrayOfModifyResponseStatus $SegmentStati
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setSegmentStati($SegmentStati)
    {
      $this->SegmentStati = $SegmentStati;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfModifyResponseSegment $Segments
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponseService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfModifyResponseService $Services
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
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
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfDiscountData
     */
    public function getSpecialDiscounts()
    {
      return $this->SpecialDiscounts;
    }

    /**
     * @param ArrayOfDiscountData $SpecialDiscounts
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return ArrayOfModifyResponsevfMacro
     */
    public function getVfMacro()
    {
      return $this->vfMacro;
    }

    /**
     * @param ArrayOfModifyResponsevfMacro $vfMacro
     * @return \App\models\ATSFlight\ModifyBookingResponseData
     */
    public function setVfMacro($vfMacro)
    {
      $this->vfMacro = $vfMacro;
      return $this;
    }

}
