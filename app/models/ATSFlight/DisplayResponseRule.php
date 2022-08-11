<?php

namespace App\models\ATSFlight;

class DisplayResponseRule
{

    /**
     * @var string $CancellationAfterTicketing
     */
    protected $CancellationAfterTicketing = null;

    /**
     * @var string $CancellationBeforeTicketing
     */
    protected $CancellationBeforeTicketing = null;

    /**
     * @var string $ChildReductionInfo
     */
    protected $ChildReductionInfo = null;

    /**
     * @var DisplayResponseCodeValuePair $FareType
     */
    protected $FareType = null;

    /**
     * @var string $InfantReductionInfo
     */
    protected $InfantReductionInfo = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var int $MaximumAge
     */
    protected $MaximumAge = null;

    /**
     * @var string $MaximumStay
     */
    protected $MaximumStay = null;

    /**
     * @var int $MinimumAge
     */
    protected $MinimumAge = null;

    /**
     * @var string $MinimumStay
     */
    protected $MinimumStay = null;

    /**
     * @var string $NoShowFee
     */
    protected $NoShowFee = null;

    /**
     * @var string $OpenJaw
     */
    protected $OpenJaw = null;

    /**
     * @var string $RebookingFee
     */
    protected $RebookingFee = null;

    /**
     * @var string $SeasonCode
     */
    protected $SeasonCode = null;

    /**
     * @var ArrayOfDisplayResponseUserInfo $UserInfos
     */
    protected $UserInfos = null;

    /**
     * @var \DateTime $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var \DateTime $ValidUntil
     */
    protected $ValidUntil = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCancellationAfterTicketing()
    {
      return $this->CancellationAfterTicketing;
    }

    /**
     * @param string $CancellationAfterTicketing
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setCancellationAfterTicketing($CancellationAfterTicketing)
    {
      $this->CancellationAfterTicketing = $CancellationAfterTicketing;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancellationBeforeTicketing()
    {
      return $this->CancellationBeforeTicketing;
    }

    /**
     * @param string $CancellationBeforeTicketing
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setCancellationBeforeTicketing($CancellationBeforeTicketing)
    {
      $this->CancellationBeforeTicketing = $CancellationBeforeTicketing;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildReductionInfo()
    {
      return $this->ChildReductionInfo;
    }

    /**
     * @param string $ChildReductionInfo
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setChildReductionInfo($ChildReductionInfo)
    {
      $this->ChildReductionInfo = $ChildReductionInfo;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param DisplayResponseCodeValuePair $FareType
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfantReductionInfo()
    {
      return $this->InfantReductionInfo;
    }

    /**
     * @param string $InfantReductionInfo
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setInfantReductionInfo($InfantReductionInfo)
    {
      $this->InfantReductionInfo = $InfantReductionInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchCode()
    {
      return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumAge()
    {
      return $this->MaximumAge;
    }

    /**
     * @param int $MaximumAge
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setMaximumAge($MaximumAge)
    {
      $this->MaximumAge = $MaximumAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaximumStay()
    {
      return $this->MaximumStay;
    }

    /**
     * @param string $MaximumStay
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setMaximumStay($MaximumStay)
    {
      $this->MaximumStay = $MaximumStay;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumAge()
    {
      return $this->MinimumAge;
    }

    /**
     * @param int $MinimumAge
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setMinimumAge($MinimumAge)
    {
      $this->MinimumAge = $MinimumAge;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumStay()
    {
      return $this->MinimumStay;
    }

    /**
     * @param string $MinimumStay
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setMinimumStay($MinimumStay)
    {
      $this->MinimumStay = $MinimumStay;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoShowFee()
    {
      return $this->NoShowFee;
    }

    /**
     * @param string $NoShowFee
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setNoShowFee($NoShowFee)
    {
      $this->NoShowFee = $NoShowFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenJaw()
    {
      return $this->OpenJaw;
    }

    /**
     * @param string $OpenJaw
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setOpenJaw($OpenJaw)
    {
      $this->OpenJaw = $OpenJaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getRebookingFee()
    {
      return $this->RebookingFee;
    }

    /**
     * @param string $RebookingFee
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setRebookingFee($RebookingFee)
    {
      $this->RebookingFee = $RebookingFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonCode()
    {
      return $this->SeasonCode;
    }

    /**
     * @param string $SeasonCode
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setSeasonCode($SeasonCode)
    {
      $this->SeasonCode = $SeasonCode;
      return $this;
    }

    /**
     * @return ArrayOfDisplayResponseUserInfo
     */
    public function getUserInfos()
    {
      return $this->UserInfos;
    }

    /**
     * @param ArrayOfDisplayResponseUserInfo $UserInfos
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setUserInfos($UserInfos)
    {
      $this->UserInfos = $UserInfos;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->ValidFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidFrom
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
      if ($ValidFrom == null) {
       $this->ValidFrom = null;
      } else {
        $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
      if ($this->ValidUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidUntil
     * @return \App\models\ATSFlight\DisplayResponseRule
     */
    public function setValidUntil(\DateTime $ValidUntil = null)
    {
      if ($ValidUntil == null) {
       $this->ValidUntil = null;
      } else {
        $this->ValidUntil = $ValidUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

}
