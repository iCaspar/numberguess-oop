<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class VerboseDiff implements Number
{
    public function __construct(
        private Number $diff
    ) {
    }

    public function number(): int
    {
        $x = $this->diff->number();
        if ($x < 0) {
            print 'Too small' . PHP_EOL;
        } elseif ($x > 0) {
            print 'Too large' . PHP_EOL;
        } else {
            print 'Bingo!' . PHP_EOL;
        }
        return $x;
    }
}
