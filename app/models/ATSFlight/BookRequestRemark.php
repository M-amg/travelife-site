<?php

namespace App\models\ATSFlight;

class BookRequestRemark
{

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
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\BookRequestRemark
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
