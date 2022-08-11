<?php

namespace App\models\ATSFlight;

class AllotmentAccount
{

    /**
     * @var string $Database
     */
    protected $Database = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $User
     */
    protected $User = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
      return $this->Database;
    }

    /**
     * @param string $Database
     * @return \App\models\ATSFlight\AllotmentAccount
     */
    public function setDatabase($Database)
    {
      $this->Database = $Database;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\models\ATSFlight\AllotmentAccount
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param string $User
     * @return \App\models\ATSFlight\AllotmentAccount
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
