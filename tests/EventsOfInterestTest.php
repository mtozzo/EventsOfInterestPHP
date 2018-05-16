<?php

declare (strict_types = 1);

use PHPUnit\Framework\TestCase;
use mtozzo\EventsOfInterest\EventOfInterest;
use mtozzo\EventsOfInterest\EventTypes\EventTypeInterface;
use mtozzo\EventsOfInterest\EventTypes\ThankYouEventType;
use mtozzo\EventsOfInterest\URL;

final class EventOfInterestTest extends TestCase
{
    /**
     * @test
     *
     * @return null
     */
    public function testConstructor(): void
    {
        $eventOfInterest = new EventOfInterest(
            new ThankYouEventType(),
            URL::fromString('https://www.123.com/api/v1/thinger')
        );

        $this->assertInstanceOf(
            EventTypeInterface::class,
            $eventOfInterest->getEventType()
        );

        $this->assertInstanceOf(
            URL::class,
            $eventOfInterest->getResourceURL()
        );
    }
}
