<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Attempts
{
    public function __construct(
        private VerboseDiff $diff,
        private int $max
    ) {
    }

    public function matches(): bool
    {
        $t = 0;
        while ($t <= $this->max && $this->diff->number() !== 0) {
            ++$t;
        }
        return $t < $this->max;
    }
}
