<?php

namespace mtozzo\EventsOfInterest;

public class EventsOfInterest
{
    const PFA_THANK_YOU_EVENT = 'Thank You Event';
    const PFA_RECOGNITION_EVENT = 'Recognition Event';
    const PFA_MILESTONE_EVENT = 'Milestone Event';
    const PFA_BOOST_EVENT = 'Boost Event';

    protected $eventType;
    protected $eventURL;

    public function __construct(
        $eventType, $eventURL
    ) {
        $this->eventType = $eventType;
        $this->eventURL = $eventURL;
    }
}
