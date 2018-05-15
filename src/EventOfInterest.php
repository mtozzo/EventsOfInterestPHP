<?php

declare(strict_types=1);

namespace mtozzo\EventsOfInterest;

use mtozzo\EventsOfInterest\EventTypes\EventTypeInterface;

class EventOfInterest
{
    protected $eventType;
    protected $resourceURL;

    public function __construct(
        EventTypeInterface $eventType, string $resourceURL
    ) {
        $this->eventType = $eventType;
        $this->resourceURL = $resourceURL;
    }

    /**
     * Get the value of eventType
     */ 
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * Get the value of eventURL
     */ 
    public function getResourceURL(): EventTypeInterface
    {
        return $this->resourceURL;
    }
}
