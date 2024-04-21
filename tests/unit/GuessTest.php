<?php

declare(strict_types=1);

namespace Numberguess;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Guess::class)]
#[RunTestsInSeparateProcesses]
final class GuessTest extends TestCase
{
    #[Test]
    public function gives_back_the_number_value_of_user_input(): void
    {
        $this->stubReadline();
        $guess = new Guess();
        ob_start();
        $number = $guess->number();
        ob_end_clean();
        $this->assertSame(42, $number);
    }

    #[Test]
    public function prompts_user_to_guess_between_1_and_100(): void
    {
        $this->stubReadline();
        $guess = new Guess();
        ob_start();
        $guess->number();
        $prompt = ob_get_clean();
        $this->assertSame(
            'Guess a number from 1 to 100' . PHP_EOL,
            $prompt
        );
    }

    public function stubReadline(): void
    {
        function readline(string $prompt): string
        {
            print $prompt;
            return "42";
        }
        return;
    }
}
