<?php declare(strict_types=1);

namespace Numberguess;

final readonly class Secret
{
    private int $number;

    public function __construct()
    {
    }

    public function number(): int
    {
        if (! isset($this->number)) {
            $this->number = rand(1, 100);
        }
        return $this->number;
    }
}
