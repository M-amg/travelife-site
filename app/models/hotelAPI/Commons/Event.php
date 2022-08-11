<?php

namespace App\models\hotelAPI\Commons;

class Event
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Commons\Event
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \App\models\hotelAPI\Commons\Event
     */
    public function setFrom(\DateTime $from = null)
    {
      if ($from == null) {
       $this->from = null;
      } else {
        $this->from = $from->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Commons\Event
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $to
     * @return \App\models\hotelAPI\Commons\Event
     */
    public function setTo(\DateTime $to = null)
    {
      if ($to == null) {
       $this->to = null;
      } else {
        $this->to = $to->format(\DateTime::ATOM);
      }
      return $this;
    }

}
