<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Write the greatest common divisor of this numbers';

function getGcd($firstNumber, $secondNumber) // nod number calculator
{
    if ($secondNumber > 0) {
        return getGcd($secondNumber, $firstNumber % $secondNumber);
    }
    return abs($firstNumber);
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = mt_rand(1, 300);
        $secondNumber = mt_rand(1, 300);
        $rightAnswer = (string) getGcd($firstNumber, $secondNumber);
        $gameData[] = ["Question: $firstNumber $secondNumber", $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
