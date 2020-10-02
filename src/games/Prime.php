<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function checkForPrime($number)
{
    if ($number < 0 || $number === 0 || $number === 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
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
