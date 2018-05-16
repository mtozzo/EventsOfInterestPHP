<?php

declare (strict_types = 1);

namespace mtozzo\EventsOfInterest;

class URL
{
    private $url;

    private function __construct(string $url)
    {
        $this->ensureIsValidURL($url);

        $this->url = $url;
    }

    public static function fromString(string $url): self
    {
        return new self($url);
    }

    public function __toString(): string
    {
        return $this->url;
    }

    private function ensureIsValidURL(string $url): void
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid URL',
                    $url
                )
            );
        }
    }
}