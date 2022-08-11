<?php

namespace App\models\ATSFlight;

class ModifyRequestSSR
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var ArrayOfint $Segments
     */
    protected $Segments = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\ModifyRequestSSR
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfint $Segments
     * @return \App\models\ATSFlight\ModifyRequestSSR
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\ModifyRequestSSR
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
