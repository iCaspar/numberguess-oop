<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Diff
{
    public function __construct(
        private Secret $secret,
        private Guess $guess
    ) {
    }

    public function number(): int
    {
        return $this->guess->number() - $this->secret->number();
    }
}
