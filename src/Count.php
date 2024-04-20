<?php

declare(strict_types=1);

namespace Numberguess;

final class Count
{
    private int $pointer = 0;

    public function __construct(
        private readonly int $count
    ) {
    }

    public function valid(): bool
    {
        return $this->pointer < $this->count;
    }

    public function next(): void
    {
        $this->pointer++;
    }
}
