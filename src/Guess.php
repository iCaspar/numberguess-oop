<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Guess
{
    public function number(): int
    {
        $guess = readline('Guess a number from 1 to 100' . PHP_EOL);
        return intval($guess);
    }
}
