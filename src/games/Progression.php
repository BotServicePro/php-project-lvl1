<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Write the missing number';

function makeProgression($start, $progressionStep, $length, $hiddenElement)
{
    $progression = '';
    $rightAnswer = '';
    $progressionAndAnswer = [];
    for ($i = 1; $i <= $length; $i++) { // print array with hided number
        if ($i === $hiddenElement) {
            $progression .= '.. ';
            $rightAnswer = $start + ($progressionStep * $i);
            continue;
        } elseif ($i !== $hiddenElement) {
            $temp = $start + ($progressionStep * $i);
            $progression .= "$temp ";
        }
        $progressionAndAnswer  = [$progression, $rightAnswer];
    }
    return $progressionAndAnswer;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $start = mt_rand(1, 500);
        $hiddenElement = mt_rand(0, 9); // which position will be hided
        $length = 10;
        $progressionStep = mt_rand(2, 10); // progression step
        $progressionAndAnswer = makeProgression($start, $progressionStep, $length, $hiddenElement);
        $gameData [] = ["$progressionAndAnswer[0]", (string) $progressionAndAnswer[1]];
    }
    run(DESCRIPTION, $gameData);
}
