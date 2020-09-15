<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Write the missing number';

function makeProgression($numbers, $randomIndexOfHiddenNumber)
{
    $numbersForUser = '';
    foreach ($numbers as $item) { // print array with hided number
        if ($item === $numbers[$randomIndexOfHiddenNumber]) {
            $numbersForUser .= '.. ';
            continue;
        }
        $numbersForUser .= "$item ";
    }
    return $numbersForUser;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startingNumber = mt_rand(1, 500);
        $randomIndexOfHiddenNumber = mt_rand(0, 9); // which position will be hided
        $progressionStep = mt_rand(2, 10); // progression step
        $numbers = range($startingNumber, $startingNumber + ($progressionStep * 9), $progressionStep);
        $numbersForUser = makeProgression($numbers, $randomIndexOfHiddenNumber);
        $rightAnswer = (string) $numbers[$randomIndexOfHiddenNumber];
        $gameData [] = ["$numbersForUser", $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
