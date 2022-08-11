<?php

namespace App\models\ATSFlight;

class CommonBookSurcharges
{

    /**
     * @var SharedPrice $BaggageSurcharge
     */
    protected $BaggageSurcharge = null;

    /**
     * @var SharedPrice $BookingSurcharge
     */
    protected $BookingSurcharge = null;

    /**
     * @var SharedPrice $CheckInSurcharge
     */
    protected $CheckInSurcharge = null;

    /**
     * @var SharedPrice $EquivalentBaggageSurcharge
     */
    protected $EquivalentBaggageSurcharge = null;

    /**
     * @var SharedPrice $EquivalentBookingSurcharge
     */
    protected $EquivalentBookingSurcharge = null;

    /**
     * @var SharedPrice $EquivalentCheckInSurcharge
     */
    protected $EquivalentCheckInSurcharge = null;

    /**
     * @var SharedPrice $EquivalentPaymentSurcharge
     */
    protected $EquivalentPaymentSurcharge = null;

    /**
     * @var SharedPrice $EquivalentPrioritySurcharge
     */
    protected $EquivalentPrioritySurcharge = null;

    /**
     * @var SharedPrice $PaymentSurcharge
     */
    protected $PaymentSurcharge = null;

    /**
     * @var SharedPrice $PrioritySurcharge
     */
    protected $PrioritySurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getBaggageSurcharge()
    {
      return $this->BaggageSurcharge;
    }

    /**
     * @param SharedPrice $BaggageSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setBaggageSurcharge($BaggageSurcharge)
    {
      $this->BaggageSurcharge = $BaggageSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getBookingSurcharge()
    {
      return $this->BookingSurcharge;
    }

    /**
     * @param SharedPrice $BookingSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setBookingSurcharge($BookingSurcharge)
    {
      $this->BookingSurcharge = $BookingSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getCheckInSurcharge()
    {
      return $this->CheckInSurcharge;
    }

    /**
     * @param SharedPrice $CheckInSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setCheckInSurcharge($CheckInSurcharge)
    {
      $this->CheckInSurcharge = $CheckInSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBaggageSurcharge()
    {
      return $this->EquivalentBaggageSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentBaggageSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setEquivalentBaggageSurcharge($EquivalentBaggageSurcharge)
    {
      $this->EquivalentBaggageSurcharge = $EquivalentBaggageSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBookingSurcharge()
    {
      return $this->EquivalentBookingSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentBookingSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setEquivalentBookingSurcharge($EquivalentBookingSurcharge)
    {
      $this->EquivalentBookingSurcharge = $EquivalentBookingSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentCheckInSurcharge()
    {
      return $this->EquivalentCheckInSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentCheckInSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setEquivalentCheckInSurcharge($EquivalentCheckInSurcharge)
    {
      $this->EquivalentCheckInSurcharge = $EquivalentCheckInSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPaymentSurcharge()
    {
      return $this->EquivalentPaymentSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentPaymentSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setEquivalentPaymentSurcharge($EquivalentPaymentSurcharge)
    {
      $this->EquivalentPaymentSurcharge = $EquivalentPaymentSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPrioritySurcharge()
    {
      return $this->EquivalentPrioritySurcharge;
    }

    /**
     * @param SharedPrice $EquivalentPrioritySurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setEquivalentPrioritySurcharge($EquivalentPrioritySurcharge)
    {
      $this->EquivalentPrioritySurcharge = $EquivalentPrioritySurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPaymentSurcharge()
    {
      return $this->PaymentSurcharge;
    }

    /**
     * @param SharedPrice $PaymentSurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setPaymentSurcharge($PaymentSurcharge)
    {
      $this->PaymentSurcharge = $PaymentSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPrioritySurcharge()
    {
      return $this->PrioritySurcharge;
    }

    /**
     * @param SharedPrice $PrioritySurcharge
     * @return \App\models\ATSFlight\CommonBookSurcharges
     */
    public function setPrioritySurcharge($PrioritySurcharge)
    {
      $this->PrioritySurcharge = $PrioritySurcharge;
      return $this;
    }

}
