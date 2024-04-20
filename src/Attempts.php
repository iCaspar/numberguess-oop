<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Attempts
{
    public function __construct(
        private VerboseDiff $diff,
        private Count $count
    ) {
    }

    public function matches(): bool
    {
        while ($this->count->valid() && $this->diff->number() !== 0) {
            $this->count->next();
        }
        return $this->count->valid();
    }
}
