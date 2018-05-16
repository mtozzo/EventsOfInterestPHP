<?php

declare (strict_types = 1);

use mtozzo\EventsOfInterest\EventOfInterest;
use mtozzo\EventsOfInterest\EventTypes\EventTypeInterface;
use mtozzo\EventsOfInterest\EventTypes\ThankYouEventType;
use PHPUnit\Framework\TestCase;

/**
 * Class EventOfInterestTest
 */
class EventOfInterestTest extends TestCase
{
    /**
     * @test
     *
     * @return null
     */
    public function constructorTest()
    {
        $eventOfInterest = new EventOfInterest(
            new ThankYouEventType(),
            'https://www.123.com/api/v1/thinger'
        );
        $this->assertInstanceOf(
            EventTypeInterface::class,
            $eventOfInterest->getEventType()
        );
    }
}
