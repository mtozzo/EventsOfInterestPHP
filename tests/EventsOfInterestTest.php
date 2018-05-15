<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mtozzo\EventsOfInterest\EventOfInterest;
use mtozzo\EventsOfInterest\EventTypes\EventTypeInterface;
use mtozzo\EventsOfInterest\EventTypes\ThankYouEventType;

class EventOfInterestTest extends TestCase
{
    /**
     * @test
     */
    public function constructorTest()
    {
        $eventOfInterest = new EventOfInterest(new ThankYouEventType(), 'https://www.123.com/api/v1/thinger');
        $this->assertInstanceOf(EventTypeInterface::class, $eventOfInterest->getEventType());
    }
}