<?php

declare(strict_types=1);

namespace Numberguess;

final readonly class Secret
{
    private int $number;

    public function __construct()
    {
        $this->number = rand(1, 100);
    }

    public function number(): int
    {
        return $this->number;
    }
}
