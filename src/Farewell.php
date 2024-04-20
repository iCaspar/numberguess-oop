<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Farewell
{
    public function __construct(
        private Attempts $attempts,
        private Secret $secret
    ) {
    }

    public function say(): void
    {
        if (! $this->attempts->matches()) {
            print 'You lost. Sorry, the number was ' . $this->secret->number() . PHP_EOL;
        }
        print 'Thanks for playing!';
    }
}
