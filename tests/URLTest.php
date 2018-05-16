<?php

declare (strict_types = 1);

use PHPUnit\Framework\TestCase;
use mtozzo\EventsOfInterest\URL;

final class URLTest extends TestCase
{
    public function testCanBeCreatedFromValidURL(): void
    {
        $this->assertInstanceOf(
            URL::class,
            URL::fromString('http://abc.com/123')
        );
    }

    public function testCannotBeCreatedFromInvalidURL(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        URL::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'http://abc.com/123',
            URL::fromString('http://abc.com/123')
        );
    }
}
