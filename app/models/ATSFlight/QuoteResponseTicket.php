<?php

namespace App\models\ATSFlight;

class QuoteResponseTicket
{

    /**
     * @var boolean $CCPaymentAllowed
     */
    protected $CCPaymentAllowed = null;

    /**
     * @var string $Commission
     */
    protected $Commission = null;

    /**
     * @var boolean $ETicket
     */
    protected $ETicket = null;

    /**
     * @var string $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var string $FareCalc
     */
    protected $FareCalc = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var boolean $IsSATA
     */
    protected $IsSATA = null;

    /**
     * @var string $IssuedBy
     */
    protected $IssuedBy = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var ArrayOfQuoteTicketResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var boolean $NetRemit
     */
    protected $NetRemit = null;

    /**
     * @var string $OSI
     */
    protected $OSI = null;

    /**
     * @var ArrayOfOSIRequestData $OSIs
     */
    protected $OSIs = null;

    /**
     * @var boolean $OverrideBaggage
     */
    protected $OverrideBaggage = null;

    /**
     * @var boolean $OverrideEndorsement
     */
    protected $OverrideEndorsement = null;

    /**
     * @var boolean $OverrideFOP
     */
    protected $OverrideFOP = null;

    /**
     * @var ArrayOfSKRequestData $SKs
     */
    protected $SKs = null;

    /**
     * @var string $SSR
     */
    protected $SSR = null;

    /**
     * @var ArrayOfSSRRequestData $SSRs
     */
    protected $SSRs = null;

    /**
     * @var boolean $TicketBySupplier
     */
    protected $TicketBySupplier = null;

    /**
     * @var SharedPrice $TicketFare
     */
    protected $TicketFare = null;

    /**
     * @var string $TicketText
     */
    protected $TicketText = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Tourcode
     */
    protected $Tourcode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getCCPaymentAllowed()
    {
      return $this->CCPaymentAllowed;
    }

    /**
     * @param boolean $CCPaymentAllowed
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setCCPaymentAllowed($CCPaymentAllowed)
    {
      $this->CCPaymentAllowed = $CCPaymentAllowed;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getETicket()
    {
      return $this->ETicket;
    }

    /**
     * @param boolean $ETicket
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setETicket($ETicket)
    {
      $this->ETicket = $ETicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param string $Endorsement
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalc()
    {
      return $this->FareCalc;
    }

    /**
     * @param string $FareCalc
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setFareCalc($FareCalc)
    {
      $this->FareCalc = $FareCalc;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param string $FormOfPayment
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSATA()
    {
      return $this->IsSATA;
    }

    /**
     * @param boolean $IsSATA
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setIsSATA($IsSATA)
    {
      $this->IsSATA = $IsSATA;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuedBy()
    {
      return $this->IssuedBy;
    }

    /**
     * @param string $IssuedBy
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setIssuedBy($IssuedBy)
    {
      $this->IssuedBy = $IssuedBy;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTicketingDate()
    {
      if ($this->LastTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTicketingDate
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setLastTicketingDate(\DateTime $LastTicketingDate = null)
    {
      if ($LastTicketingDate == null) {
       $this->LastTicketingDate = null;
      } else {
        $this->LastTicketingDate = $LastTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfQuoteTicketResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfQuoteTicketResponseLeg $Legs
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetRemit()
    {
      return $this->NetRemit;
    }

    /**
     * @param boolean $NetRemit
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setNetRemit($NetRemit)
    {
      $this->NetRemit = $NetRemit;
      return $this;
    }

    /**
     * @return string
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param string $OSI
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return ArrayOfOSIRequestData
     */
    public function getOSIs()
    {
      return $this->OSIs;
    }

    /**
     * @param ArrayOfOSIRequestData $OSIs
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setOSIs($OSIs)
    {
      $this->OSIs = $OSIs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideBaggage()
    {
      return $this->OverrideBaggage;
    }

    /**
     * @param boolean $OverrideBaggage
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setOverrideBaggage($OverrideBaggage)
    {
      $this->OverrideBaggage = $OverrideBaggage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideEndorsement()
    {
      return $this->OverrideEndorsement;
    }

    /**
     * @param boolean $OverrideEndorsement
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setOverrideEndorsement($OverrideEndorsement)
    {
      $this->OverrideEndorsement = $OverrideEndorsement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideFOP()
    {
      return $this->OverrideFOP;
    }

    /**
     * @param boolean $OverrideFOP
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setOverrideFOP($OverrideFOP)
    {
      $this->OverrideFOP = $OverrideFOP;
      return $this;
    }

    /**
     * @return ArrayOfSKRequestData
     */
    public function getSKs()
    {
      return $this->SKs;
    }

    /**
     * @param ArrayOfSKRequestData $SKs
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setSKs($SKs)
    {
      $this->SKs = $SKs;
      return $this;
    }

    /**
     * @return string
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param string $SSR
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return ArrayOfSSRRequestData
     */
    public function getSSRs()
    {
      return $this->SSRs;
    }

    /**
     * @param ArrayOfSSRRequestData $SSRs
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketBySupplier()
    {
      return $this->TicketBySupplier;
    }

    /**
     * @param boolean $TicketBySupplier
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setTicketBySupplier($TicketBySupplier)
    {
      $this->TicketBySupplier = $TicketBySupplier;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTicketFare()
    {
      return $this->TicketFare;
    }

    /**
     * @param SharedPrice $TicketFare
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setTicketFare($TicketFare)
    {
      $this->TicketFare = $TicketFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketText()
    {
      return $this->TicketText;
    }

    /**
     * @param string $TicketText
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setTicketText($TicketText)
    {
      $this->TicketText = $TicketText;
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
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourcode()
    {
      return $this->Tourcode;
    }

    /**
     * @param string $Tourcode
     * @return \App\models\ATSFlight\QuoteResponseTicket
     */
    public function setTourcode($Tourcode)
    {
      $this->Tourcode = $Tourcode;
      return $this;
    }

}
