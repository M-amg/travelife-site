<?php

namespace App\models\hotelAPI\Hotels;

class Comment
{

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \App\models\hotelAPI\Hotels\Comment
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \App\models\hotelAPI\Hotels\Comment
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
