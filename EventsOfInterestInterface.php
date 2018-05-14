<?php

namespace mtozzo\EventsOfInterest;

public class EventsOfInterest
{
    protected $eventType;
    protected $eventURL;

    public function __construct(
        $eventType, $eventURL
    ) {
        $this->eventType = $eventType;
        $this->eventURL = $eventURL;
    }
}
