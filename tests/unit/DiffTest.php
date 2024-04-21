<?php

declare(strict_types=1);

namespace Numberguess;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Diff::class)]
final class DiffTest extends TestCase
{
    #[Test]
    public function finds_the_difference_between_two_numbers(): void
    {
        $secret = $this->createStub(Number::class);
        $secret->method('number')->willReturn(6);
        $guess = $this->createStub(Number::class);
        $guess->method('number')->willReturn(10);
        $diff = new Diff($secret, $guess);
        $this->assertSame(4, $diff->number());
    }
}
