<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Diff
{
    public function __construct(
        private Number $subtrahend,
        private Number $minuend
    ) {
    }

    public function number(): int
    {
        return $this->minuend->number() - $this->subtrahend->number();
    }
}
