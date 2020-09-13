<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }

    $i = 3;
    $maxFactor = (int) sqrt($number);
    while ($i <= $maxFactor) {
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
        $numberForUser = mt_rand(1, 500); // number shows to user
        $rightAnswer = isPrime($numberForUser) ? 'yes' : 'no';
        $gameData [] = ["$numberForUser", $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
