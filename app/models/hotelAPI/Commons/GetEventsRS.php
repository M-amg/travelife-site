<?php

namespace App\models\hotelAPI\Commons;

class GetEventsRS
{

    /**
     * @var Event[] $events
     */
    protected $events = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param Event[] $events
     * @return \App\models\hotelAPI\Commons\GetEventsRS
     */
    public function setEvents(array $events = null)
    {
      $this->events = $events;
      return $this;
    }

}
