<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Write the missing number';

function makeProgression($start, $step, $length, $hiddenElement)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        if ($i == $hiddenElement) {
            $progression[$i] = '..';
        } else {
            $progression[$i] = $start + $step * $i;
        }
    }
    return $progression;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $length = 10;
        $start = mt_rand(1, 100);
        $hiddenElement = mt_rand(0, 9);
        $step = mt_rand(2, 10);
        $progression = makeProgression($start, $step, $length, $hiddenElement);
        $question = implode(' ', $progression);
        $correctAnswer = (string) ($start + $hiddenElement * $step);
        $gameData[] = [$question, $correctAnswer];
    }
    run(DESCRIPTION, $gameData);
}
