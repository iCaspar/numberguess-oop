<?php

declare(strict_types=1);

namespace Numberguess;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(VerboseDiff::class)]
final class VerboseDiffTest extends TestCase
{
    #[Test]
    public function says_less_than_zero_is_too_small(): void
    {
        $number = $this->createStub(Number::class);
        $number->method('number')->willReturn(-1);
        $vDiff = new VerboseDiff($number);
        ob_start();
        $vDiff->number();
        $output = ob_get_clean();
        $this->assertSame('Too small' . PHP_EOL, $output);
    }

    #[Test]
    public function says_more_than_zero_is_too_large(): void
    {
        $number = $this->createStub(Number::class);
        $number->method('number')->willReturn(1);
        $vDiff = new VerboseDiff($number);
        ob_start();
        $vDiff->number();
        $output = ob_get_clean();
        $this->assertSame('Too large' . PHP_EOL, $output);
    }

    #[Test]
    public function says_zero_is_just_right(): void
    {
        $number = $this->createStub(Number::class);
        $number->method('number')->willReturn(0);
        $vDiff = new VerboseDiff($number);
        ob_start();
        $vDiff->number();
        $output = ob_get_clean();
        $this->assertSame('Bingo!' . PHP_EOL, $output);
    }
}
