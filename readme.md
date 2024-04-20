# Guess the Number

An experiment with "Elegant Objects" in PHP.

This number guessing game is translated into PHP from the
Java example by Yegor Bugayenko in _Elegant Objects, Vol 2_,
pages 121-126.

The idea is that (except for the main `app.php` script)
everything is a completely encapsulated immutable object.

Changes and updates to the original are on `trunk`. The
initial classes translated from Java from the EO book are
on the `yegor-eo` branch, and include a bug that allows
an additional guess. (I'm not sure whether the bug is there
intentionally by Bugayenko to make a point or if it a
typographical error.)

## To run
(Assuming you have php 8.3 available...)
* Clone this repo.
* Run `composer install`.
* `cd` to where you cloned the app.
* Run in your terminal with `php app.php`

## The Game
You have 5 attempts to guess a random number
between 1 and 100. After each attempt the game will tell
you whether you guessed too large, too small, or if you
guessed correctly.
