<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function checkForPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }

    $i = 3;
    $maxDivisor = (int) sqrt($number);
    while ($i <= $maxDivisor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = mt_rand(1, 500);
        $rightAnswer = checkForPrime($number) ? 'yes' : 'no';
        $gameData[] = [$number, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
