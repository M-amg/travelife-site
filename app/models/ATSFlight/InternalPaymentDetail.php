<?php

namespace App\models\ATSFlight;

class InternalPaymentDetail extends PaymentDefinitionData
{

    /**
     * @var string $_x003C_CarrierCodes_x003E_k__BackingField
     */
    protected $_x003C_CarrierCodes_x003E_k__BackingField = null;

    /**
     * @var string $_x003C_Email_x003E_k__BackingField
     */
    protected $_x003C_Email_x003E_k__BackingField = null;

    /**
     * @var boolean $_x003C_OverrideEmail_x003E_k__BackingField
     */
    protected $_x003C_OverrideEmail_x003E_k__BackingField = null;

    /**
     * @var string $_x003C_UserGUID_x003E_k__BackingField
     */
    protected $_x003C_UserGUID_x003E_k__BackingField = null;

    /**
     * @param int $ID
     * @param PaymentTypeEnum $PaymentType
     * @param boolean $_x003C_OverrideEmail_x003E_k__BackingField
     */
    public function __construct($ID, $PaymentType, $_x003C_OverrideEmail_x003E_k__BackingField)
    {
      parent::__construct($ID, $PaymentType);
      $this->_x003C_OverrideEmail_x003E_k__BackingField = $_x003C_OverrideEmail_x003E_k__BackingField;
    }

    /**
     * @return string
     */
    public function get_x003C_CarrierCodes_x003E_k__BackingField()
    {
      return $this->_x003C_CarrierCodes_x003E_k__BackingField;
    }

    /**
     * @param string $_x003C_CarrierCodes_x003E_k__BackingField
     * @return \App\models\ATSFlight\InternalPaymentDetail
     */
    public function set_x003C_CarrierCodes_x003E_k__BackingField($_x003C_CarrierCodes_x003E_k__BackingField)
    {
      $this->_x003C_CarrierCodes_x003E_k__BackingField = $_x003C_CarrierCodes_x003E_k__BackingField;
      return $this;
    }

    /**
     * @return string
     */
    public function get_x003C_Email_x003E_k__BackingField()
    {
      return $this->_x003C_Email_x003E_k__BackingField;
    }

    /**
     * @param string $_x003C_Email_x003E_k__BackingField
     * @return \App\models\ATSFlight\InternalPaymentDetail
     */
    public function set_x003C_Email_x003E_k__BackingField($_x003C_Email_x003E_k__BackingField)
    {
      $this->_x003C_Email_x003E_k__BackingField = $_x003C_Email_x003E_k__BackingField;
      return $this;
    }

    /**
     * @return boolean
     */
    public function get_x003C_OverrideEmail_x003E_k__BackingField()
    {
      return $this->_x003C_OverrideEmail_x003E_k__BackingField;
    }

    /**
     * @param boolean $_x003C_OverrideEmail_x003E_k__BackingField
     * @return \App\models\ATSFlight\InternalPaymentDetail
     */
    public function set_x003C_OverrideEmail_x003E_k__BackingField($_x003C_OverrideEmail_x003E_k__BackingField)
    {
      $this->_x003C_OverrideEmail_x003E_k__BackingField = $_x003C_OverrideEmail_x003E_k__BackingField;
      return $this;
    }

    /**
     * @return string
     */
    public function get_x003C_UserGUID_x003E_k__BackingField()
    {
      return $this->_x003C_UserGUID_x003E_k__BackingField;
    }

    /**
     * @param string $_x003C_UserGUID_x003E_k__BackingField
     * @return \App\models\ATSFlight\InternalPaymentDetail
     */
    public function set_x003C_UserGUID_x003E_k__BackingField($_x003C_UserGUID_x003E_k__BackingField)
    {
      $this->_x003C_UserGUID_x003E_k__BackingField = $_x003C_UserGUID_x003E_k__BackingField;
      return $this;
    }

}
