<?php declare(strict_types=1);

namespace Numberguess;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Secret::class)]
final class SecretTest extends TestCase
{
    #[Test]
    public function tells_a_secret_number_between_1_and_100(): void
    {
        $secretNumber = (new Secret())->number();
        $this->assertGreaterThanOrEqual(1, $secretNumber);
        $this->assertLessThanOrEqual(100, $secretNumber);
    }

    #[Test]
    public function the_secret_number_is_the_same_every_time_we_ask()
    {
        $secret = new Secret();
        $ask1 = $secret->number();
        $ask2 = $secret->number();
        $this->assertSame($ask1, $ask2);
    }
}
