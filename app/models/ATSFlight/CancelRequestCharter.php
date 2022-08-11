<?php

namespace App\models\ATSFlight;

class CancelRequestCharter
{

    /**
     * @var CharterAccount $Account
     */
    protected $Account = null;

    /**
     * @var boolean $IsLiveBooking
     */
    protected $IsLiveBooking = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CharterAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param CharterAccount $Account
     * @return \App\models\ATSFlight\CancelRequestCharter
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLiveBooking()
    {
      return $this->IsLiveBooking;
    }

    /**
     * @param boolean $IsLiveBooking
     * @return \App\models\ATSFlight\CancelRequestCharter
     */
    public function setIsLiveBooking($IsLiveBooking)
    {
      $this->IsLiveBooking = $IsLiveBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \App\models\ATSFlight\CancelRequestCharter
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

}
