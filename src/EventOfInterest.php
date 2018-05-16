<?php

declare (strict_types = 1);

namespace mtozzo\EventsOfInterest;

use mtozzo\EventsOfInterest\EventTypes\EventTypeInterface;

class EventOfInterest
{
    protected $eventType;
    protected $resourceURL;

    public function __construct(
        EventTypeInterface $eventType,
        string $resourceURL
    ) {
        $this->eventType = $eventType;
        $this->resourceURL = $resourceURL;
    }

    /**
     * Get the value of eventType
     */
    public function getEventType(): EventTypeInterface
    {
        return $this->eventType;
    }

    /**
     * Get the value of eventURL
     */
    public function getResourceURL(): string
    {
        return $this->resourceURL;
    }
}
