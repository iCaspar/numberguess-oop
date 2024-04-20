<?php

declare(strict_types=1);

use Numberguess\Attempts;
use Numberguess\Diff;
use Numberguess\Farewell;
use Numberguess\Guess;
use Numberguess\Secret;
use Numberguess\Count;
use Numberguess\VerboseDiff;

require_once 'vendor/autoload.php';

(new Farewell(
    new Attempts(
        new VerboseDiff(
            new Diff(
                $secret = new Secret(),
                new Guess()
            )
        ),
        new Count(5)
    ),
    $secret
)
)->say();
print PHP_EOL;
