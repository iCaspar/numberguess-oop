<?php

declare(strict_types=1);

use Numberguess\Attempts;
use Numberguess\Diff;
use Numberguess\Farewell;
use Numberguess\Guess;
use Numberguess\Secret;
use Numberguess\VerboseDiff;

require_once 'vendor/autoload.php';

$secret = new Secret();
(new Farewell(
    new Attempts(
        new VerboseDiff(
            new Diff(
                $secret,
                new Guess()
            )
        ),
        5
    ),
    $secret
)
)->say();
print PHP_EOL;
