<?php

namespace App\models\ATSFlight;

class Version
{

    /**
     * @var int $_Build
     */
    protected $_Build = null;

    /**
     * @var int $_Major
     */
    protected $_Major = null;

    /**
     * @var int $_Minor
     */
    protected $_Minor = null;

    /**
     * @var int $_Revision
     */
    protected $_Revision = null;

    /**
     * @param int $_Build
     * @param int $_Major
     * @param int $_Minor
     * @param int $_Revision
     */
    public function __construct($_Build, $_Major, $_Minor, $_Revision)
    {
      $this->_Build = $_Build;
      $this->_Major = $_Major;
      $this->_Minor = $_Minor;
      $this->_Revision = $_Revision;
    }

    /**
     * @return int
     */
    public function get_Build()
    {
      return $this->_Build;
    }

    /**
     * @param int $_Build
     * @return \App\models\ATSFlight\Version
     */
    public function set_Build($_Build)
    {
      $this->_Build = $_Build;
      return $this;
    }

    /**
     * @return int
     */
    public function get_Major()
    {
      return $this->_Major;
    }

    /**
     * @param int $_Major
     * @return \App\models\ATSFlight\Version
     */
    public function set_Major($_Major)
    {
      $this->_Major = $_Major;
      return $this;
    }

    /**
     * @return int
     */
    public function get_Minor()
    {
      return $this->_Minor;
    }

    /**
     * @param int $_Minor
     * @return \App\models\ATSFlight\Version
     */
    public function set_Minor($_Minor)
    {
      $this->_Minor = $_Minor;
      return $this;
    }

    /**
     * @return int
     */
    public function get_Revision()
    {
      return $this->_Revision;
    }

    /**
     * @param int $_Revision
     * @return \App\models\ATSFlight\Version
     */
    public function set_Revision($_Revision)
    {
      $this->_Revision = $_Revision;
      return $this;
    }

}
